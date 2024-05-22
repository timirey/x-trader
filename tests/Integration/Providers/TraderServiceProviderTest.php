<?php

use App\Providers\TraderServiceProvider;
use App\Services\Trader;

beforeEach(function () {
    $this->app->register(TraderServiceProvider::class);
});

it('registers service', function () {
    expect($this->app->bound('trader'))->toBeTrue()
        ->and($this->app->make('trader'))
        ->toBeInstanceOf(Trader::class);
});
