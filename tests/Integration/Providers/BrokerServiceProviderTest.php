<?php

use App\Contracts\BrokerClientContract;
use App\Contracts\BrokerContract;
use App\Facades\Broker;
use App\Providers\BrokerServiceProvider;

beforeEach(function () {
    $this->app->register(BrokerServiceProvider::class);
});

it('registers broker service', function () {
    expect($this->app->bound(BrokerContract::class))->toBeTrue()
        ->and($this->app->make(BrokerContract::class))
        ->toBeInstanceOf(BrokerContract::class);
});

it('registers broker internal services', function () {
    expect(Broker::getClient())->toBeInstanceOf(BrokerClientContract::class);
});
