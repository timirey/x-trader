<?php

declare(strict_types=1);

use App\Modules\Trader\Contracts\BrokerContract;
use App\Modules\Trader\Facades\Broker;

it('provides broker service facade', function () {
    expect(Broker::getFacadeRoot())->toBeInstanceOf(BrokerContract::class);
});
