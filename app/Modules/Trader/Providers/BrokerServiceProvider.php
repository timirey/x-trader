<?php

declare(strict_types=1);

namespace App\Modules\Trader\Providers;

use App\Modules\Trader\Configs\BrokerClientConfig;
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

        $this->app->singleton(BrokerClientConfig::class, static fn ($app) => new BrokerClientConfig(
            $app['config']['broker.uri'],
            $app['config']['broker.user_id'],
            $app['config']['broker.password']
        ));

        $this->app->when(BrokerService::class)
            ->needs(BrokerClientContract::class)
            ->give(static fn ($app) => new BrokerClientService(
                $app->make(BrokerClientConfig::class))
            );
    }
}
