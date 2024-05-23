<?php

namespace App\Facades;

use App\Contracts\BrokerAuthenticationContract;
use App\Contracts\BrokerCommandContract;
use App\Contracts\BrokerContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static BrokerAuthenticationContract getAuthenticator()
 * @method static BrokerCommandContract getCommand()
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
