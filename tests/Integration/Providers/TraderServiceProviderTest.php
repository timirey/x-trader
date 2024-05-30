<?php

use App\Modules\Trader\Contracts\TraderContract;
use App\Modules\Trader\Providers\TraderServiceProvider;
use App\Modules\Trader\Services\TraderService;

beforeEach(function () {
    $this->app->register(TraderServiceProvider::class);
});

it('registers trader service', function () {
    expect($this->app->bound(TraderContract::class))->toBeTrue()
        ->and($this->app->make(TraderContract::class))
        ->toBeInstanceOf(TraderService::class);
});
