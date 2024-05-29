<?php

use App\Contracts\BrokerContract;
use App\Facades\Broker;

it('provides broker service facade', function () {
    expect(Broker::getFacadeRoot())->toBeInstanceOf(BrokerContract::class);
});
