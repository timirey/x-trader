<?php

use App\Modules\Trader\Brokers\BrokerClient;
use WebSocket\Client;

test('websocket client is set correctly', function () {
    $socketUri = 'ws://example.com';

    $client = new class($socketUri) extends BrokerClient
    {
        public function getClient(): Client
        {
            return $this->client;
        }
    };

    $socketClient = $client->getClient();

    expect($socketClient)->toBeInstanceOf(Client::class);

    $clientReflection = new ReflectionClass($socketClient);
    $uriProperty = $clientReflection->getProperty('socket_uri');
    $clientUri = $uriProperty->getValue($socketClient);

    expect($clientUri)->toEqual($socketUri);
});
