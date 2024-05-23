<?php

namespace App\Contracts;

interface BrokerContract
{
    public function __construct(BrokerAuthenticationContract $authenticator, BrokerCommandContract $command);

    public function getAuthenticator(): BrokerAuthenticationContract;

    public function getCommand(): BrokerCommandContract;
}
