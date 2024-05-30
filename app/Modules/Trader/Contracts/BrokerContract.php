<?php

namespace App\Modules\Trader\Contracts;

interface BrokerContract
{
    public function __construct(BrokerClientContract $client);

    public function getClient(): BrokerClientContract;
}
