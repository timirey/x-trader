<?php

namespace App\Contracts\Broker;

use App\Contracts\Broker\Actions\AuthenticatorContract;
use App\Contracts\Broker\Actions\CommandContract;

interface BrokerContract
{
    public function __construct(AuthenticatorContract $authenticator, CommandContract $command);
}
