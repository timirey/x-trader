<?php

use App\Providers\TraderServiceProvider;
use App\Services\TraderService;

beforeEach(function () {
    $this->app->register(TraderServiceProvider::class);
});

it('registers service', function () {
    expect($this->app->bound('trader'))->toBeTrue()
        ->and($this->app->make('trader'))
        ->toBeInstanceOf(TraderService::class);
});
