<?php

use App\Abstracts\AbstractBroker;
use App\Contracts\BrokerContract;
use App\Providers\BrokerServiceProvider;

beforeEach(function () {
    $this->app->register(BrokerServiceProvider::class);
});

it('registers broker service', function () {
    expect($this->app->bound(BrokerContract::class))->toBeTrue()
        ->and($this->app->make(BrokerContract::class))
        ->toBeInstanceOf(AbstractBroker::class);
});
