<?php

use App\Brokers\Broker;
use App\Contracts\BrokerContract;
use App\Providers\BrokerServiceProvider;

beforeEach(function () {
    $this->app->register(BrokerServiceProvider::class);
});

it('registers broker service', function () {
    expect($this->app->bound(BrokerContract::class))->toBeTrue()
        ->and($this->app->make(BrokerContract::class))
        ->toBeInstanceOf(Broker::class);
});
//
//it('registers broker internal services', function () {
//    $broker = $this->app->make(BrokerContract::class);
//
//    expect($broker->authenticator)->toBeInstanceOf(AbstractBrokerAuthentication::class)
//        ->and($broker->command)->toBeInstanceOf(AbstractBrokerCommand::class)
//        ->and($broker->client)->toBeInstanceOf(AbstractBrokerClient::class);
//});
