<?php

namespace App\Brokers;

use App\Contracts\BrokerClientContract;
use Illuminate\Support\Facades\Log;
use WebSocket\Client;

abstract class AbstractBrokerClient implements BrokerClientContract
{
    protected Client $client;

    public function __construct(protected string $uri)
    {
        $this->client = new Client($this->uri);
    }

    public function getClient(): Client
    {
        if (!$this->client->isConnected()) {
            Log::error('Client connection could not be established.');
        }

        return $this->client;
    }
}
