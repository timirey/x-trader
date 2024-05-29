<?php

use App\Contracts\BrokerContract;

it('provides broker() helper method', function () {
    expect(broker())->toBeInstanceOf(BrokerContract::class);
});
