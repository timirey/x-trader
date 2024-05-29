<?php

use App\Contracts\TraderContract;
use App\Providers\TraderServiceProvider;
use App\Services\TraderService;

beforeEach(function () {
    $this->app->register(TraderServiceProvider::class);
});

it('registers trader service', function () {
    expect($this->app->bound(TraderContract::class))->toBeTrue()
        ->and($this->app->make(TraderContract::class))
        ->toBeInstanceOf(TraderService::class);
});
