<?php

namespace App\Brokers;

use App\Contracts\BrokerClientContract;
use App\Contracts\BrokerContract;

abstract class AbstractBroker implements BrokerContract
{
    public function __construct(public BrokerClientContract $client)
    {
    }

    public function getClient(): BrokerClientContract
    {
        return $this->client;
    }
}
