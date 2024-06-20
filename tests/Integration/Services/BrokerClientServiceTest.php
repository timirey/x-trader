<?php

use App\Modules\Trader\Configs\BrokerClientConfig;
use App\Modules\Trader\Payloads\LoginPayload;
use App\Modules\Trader\Services\BrokerClientService;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use WebSocket\Client;

it('initializes, authenticates the client correctly', function () {
    Config::set([
        'broker.uri' => 'ws://fake-uri',
        'broker.user_id' => 'fake-user-id',
        'broker.password' => 'fake-password',
    ]);

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
