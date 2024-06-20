<?php

use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Payloads\LoginPayload;
use WebSocket\Client;

it('provides broker service', function () {
    $brokerClient = broker()->getClient();

    expect($brokerClient)->toBeInstanceOf(BrokerClientContract::class);

    $brokerClientReflection = new ReflectionClass($brokerClient);

    $loginPayloadProperty = $brokerClientReflection->getProperty('loginPayload');
    $loginPayload = $loginPayloadProperty->getValue($brokerClient);

    expect($loginPayload)->toBeInstanceOf(LoginPayload::class);

    $clientProperty = $brokerClientReflection->getProperty('client');
    $client = $clientProperty->getValue($brokerClient);

    expect($client)->toBeInstanceOf(Client::class);
});
