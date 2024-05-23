<?php

use App\Facades\Trader as TraderFacade;
use App\Services\Trader as TraderService;

it('provides trader service facade', function () {
    expect(TraderFacade::getFacadeRoot())->toBeInstanceOf(TraderService::class);
});
