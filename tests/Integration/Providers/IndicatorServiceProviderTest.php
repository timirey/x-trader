<?php

use App\Providers\IndicatorServiceProvider;
use App\Services\IndicatorService;

beforeEach(function () {
    $this->app->register(IndicatorServiceProvider::class);
});

it('registers service', function () {
    expect($this->app->bound('indicator'))->toBeTrue()
        ->and($this->app->make('indicator'))
        ->toBeInstanceOf(IndicatorService::class);
});
