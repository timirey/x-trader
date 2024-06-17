<?php

declare(strict_types=1);

namespace App\Modules\Trader\Facades;

use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Contracts\BrokerContract;
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
