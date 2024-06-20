<?php

use App\Modules\Trader\Configs\BrokerClientConfig;
use App\Modules\Trader\Contracts\BrokerContract;
use App\Modules\Trader\Services\BrokerService;
use Illuminate\Support\Facades\Config;

beforeEach(function () {
    Config::set('broker.uri', 'ws://fake-uri');
    Config::set('broker.user_id', 'fake-user-id');
    Config::set('broker.password', 'fake-password');
});

it('registers broker services correctly', function () {
    $brokerService = $this->app->make(BrokerContract::class);

    expect($brokerService)->toBeInstanceOf(BrokerService::class);
});

it('creates broker client config correctly', function () {
    $config = $this->app->make(BrokerClientConfig::class);

    expect($config->uri)->toBe('ws://fake-uri')
        ->and($config->userId)->toBe('fake-user-id')
        ->and($config->password)->toBe('fake-password');
});
