<?php

use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Contracts\BrokerContract;
use App\Modules\Trader\Facades\Broker;

it('registers broker service', function () {
    expect($this->app->bound(BrokerContract::class))->toBeTrue()
        ->and($this->app->make(BrokerContract::class))
        ->toBeInstanceOf(BrokerContract::class);
});

it('registers broker internal services', function () {
    expect(Broker::getClient())->toBeInstanceOf(BrokerClientContract::class);
});
