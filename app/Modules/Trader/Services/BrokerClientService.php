<?php

declare(strict_types=1);

namespace App\Modules\Trader\Services;

use App\Modules\Trader\Configs\BrokerClientConfig;
use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Interfaces\ResponseInterface;
use App\Modules\Trader\Payloads\LoginPayload;
use App\Modules\Trader\Responses\LoginResponse;
use WebSocket\Client;
use WebSocket\ConnectionException;

class BrokerClientService implements BrokerClientContract
{
    protected Client $client;

    private LoginPayload|string $loginPayload;

    public function __construct(protected BrokerClientConfig $config)
    {
        $this->client = new Client($config->uri);
        $this->loginPayload = new LoginPayload($config->userId, $config->password);
    }

    public function getClient(): Client
    {
        if (! $this->client->isConnected()) {
            $this->authenticate();
        }

        return $this->client;
    }

    private function authenticate(): ResponseInterface
    {
        $this->client->send($this->loginPayload);

        $response = $this->client->receive();

        if (! $response) {
            throw new ConnectionException('No response received from client after sending login payload!');
        }

        $loginResponse = LoginResponse::createFromJson($response);

        if (! $loginResponse->isSuccessful()) {
            throw new ConnectionException($loginResponse->getErrorDescr());
        }

        return $loginResponse;
    }
}
