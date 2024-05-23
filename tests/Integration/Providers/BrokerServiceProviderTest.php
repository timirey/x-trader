<?php

use App\Abstracts\AbstractBroker;
use App\Abstracts\AbstractBrokerAuthentication;
use App\Abstracts\AbstractBrokerCommand;
use App\Contracts\BrokerContract;
use App\Providers\BrokerServiceProvider;

beforeEach(function () {
    $this->app->register(BrokerServiceProvider::class);
});

it('registers broker service', function () {
    expect($this->app->bound(BrokerContract::class))->toBeTrue()
        ->and($this->app->make(BrokerContract::class))
        ->toBeInstanceOf(AbstractBroker::class);
});

it('registers broker internal services', function () {
    $broker = $this->app->make(BrokerContract::class);

    expect($broker->getAuthenticator())->toBeInstanceOf(AbstractBrokerAuthentication::class)
        ->and($broker->getCommand())->toBeInstanceOf(AbstractBrokerCommand::class);
});
