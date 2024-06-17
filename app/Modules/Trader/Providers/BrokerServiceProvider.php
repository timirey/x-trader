<?php

namespace App\Modules\Trader\Providers;

use App\Modules\Trader\Contracts\BrokerClientContract;
use App\Modules\Trader\Contracts\BrokerContract;
use App\Modules\Trader\Services\BrokerClientService;
use App\Modules\Trader\Services\BrokerService;
use Illuminate\Support\ServiceProvider;

class BrokerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(BrokerContract::class, BrokerService::class);

        $this->app->when(BrokerService::class)
            ->needs(BrokerClientContract::class)
            ->give(static fn () => new BrokerClientService(config('broker.uri'), config('broker.user_id'), config('broker.password')));
    }
}
