<?php

use App\Modules\Trader\Contracts\BrokerContract;

it('provides broker() helper method', function () {
    expect(broker())->toBeInstanceOf(BrokerContract::class);
});
