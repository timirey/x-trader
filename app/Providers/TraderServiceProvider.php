<?php

namespace App\Providers;

use App\Contracts\TraderContract;
use App\Services\TraderService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class TraderServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton('trader', fn () => new TraderService());
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
