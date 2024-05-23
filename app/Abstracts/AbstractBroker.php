<?php

namespace App\Abstracts;

use App\Contracts\BrokerAuthenticationContract;
use App\Contracts\BrokerCommandContract;
use App\Contracts\BrokerContract;

abstract readonly class AbstractBroker implements BrokerContract
{
    public function __construct(private BrokerAuthenticationContract $authenticator, private BrokerCommandContract $command)
    {
    }

    public function getAuthenticator(): BrokerAuthenticationContract
    {
        return $this->authenticator;
    }

    public function getCommand(): BrokerCommandContract
    {
        return $this->command;
    }
}
