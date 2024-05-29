<?php

namespace App\Facades;

use App\Contracts\BrokerClientContract;
use App\Contracts\BrokerContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static BrokerClientContract getClient()
 */
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
