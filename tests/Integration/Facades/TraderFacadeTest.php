<?php

use App\Modules\Trader\Facades\Trader as TraderFacade;
use App\Modules\Trader\Services\TraderService as TraderService;

it('provides trader service facade', function () {
    expect(TraderFacade::getFacadeRoot())->toBeInstanceOf(TraderService::class);
});
