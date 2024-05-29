<?php

namespace App\Facades;

use App\Contracts\BrokerContract;
use Illuminate\Support\Facades\Facade;

class Broker extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return BrokerContract::class;
    }
}
