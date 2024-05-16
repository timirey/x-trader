<?php

use App\Facades\Indicator;
use App\Services\IndicatorService;

it('provides service facade', function () {
    expect(Indicator::getFacadeRoot())->toBeInstanceOf(IndicatorService::class);
});
