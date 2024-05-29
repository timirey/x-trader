<?php

namespace App\Contracts;

interface BrokerContract
{
    public function __construct(BrokerClientContract $client);

    public function getClient(): BrokerClientContract;
}
