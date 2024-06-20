<?php

use App\Modules\Trader\Contracts\BrokerContract;
use App\Modules\Trader\Facades\Broker;

it('provides broker service facade', function () {
    expect(Broker::getFacadeRoot())->toBeInstanceOf(BrokerContract::class);
});
