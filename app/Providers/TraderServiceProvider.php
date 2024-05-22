<?php

namespace App\Providers;

use App\Contracts\TraderContract;
use App\Services\Trader;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class TraderServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton('trader', fn () => new Trader());
    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            TraderContract::class,
        ];
    }
}
