<?php

declare(strict_types=1);

use App\Modules\Trader\Configs\BrokerClientConfig;
use App\Modules\Trader\Services\BrokerClientService;
use WebSocket\Client;

it('initializes websocket client', function () {
    $config = new class('ws://example.com', 'userId', 'password') extends BrokerClientConfig
    {
    };

    $client = new class($config) extends BrokerClientService
    {
        public function getClient(): Client
        {
            return $this->client;
        }
    };

    $socketClient = $client->getClient();

    expect($socketClient)->toBeInstanceOf(Client::class);
});
