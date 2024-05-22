<?php

use App\Facades\Trader;
use App\Services\Trader;

it('provides service facade', function () {
    expect(Trader::getFacadeRoot())->toBeInstanceOf(Trader::class);
});
