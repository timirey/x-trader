<?php

use App\Facades\Trader;
use App\Services\TraderService;

it('provides service facade', function () {
    expect(Trader::getFacadeRoot())->toBeInstanceOf(TraderService::class);
});
