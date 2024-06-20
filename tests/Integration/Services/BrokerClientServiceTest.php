<?php

use App\Modules\Trader\Configs\BrokerClientConfig;
use App\Modules\Trader\Payloads\LoginPayload;
use App\Modules\Trader\Services\BrokerClientService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
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

it('authenticates and gets client correctly', function () {
    Config::set(include 'tests/Fixtures/broker.php');

    $loginPayload = new LoginPayload(config('broker.user_id'), config('broker.password'));

    $clientMock = Mockery::mock(Client::class);

    $clientMock->shouldReceive('isConnected')
        ->andReturn(false);

    $clientMock->shouldReceive('send')
        ->once()
        ->with($loginPayload->toJson());

    $clientMock->shouldReceive('receive')
        ->once()
        ->andReturn(json_encode([
            'status' => true,
            'streamSessionId' => Str::random(32),
        ]));

    $this->app->instance(Client::class, $clientMock);

    $brokerClientConfig = $this->app->make(BrokerClientConfig::class);

    $brokerClientService = new class($brokerClientConfig, $clientMock) extends BrokerClientService
    {
        public function __construct(BrokerClientConfig $config, Client $client)
        {
            parent::__construct($config);

            $this->client = $client;
        }
    };

    $response = $brokerClientService->getClient();

    expect($response)->toBeInstanceOf(Client::class)
        ->and($response->isConnected())->toBeFalse();
});
