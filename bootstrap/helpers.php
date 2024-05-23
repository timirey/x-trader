<?php

use App\Contracts\BrokerContract;
use App\Contracts\TraderContract;

if (! function_exists('trader')) {
    function trader(): TraderContract
    {
        return app(TraderContract::class);
    }
}

if (! function_exists('broker')) {
    function broker(): BrokerContract
    {
        return app(BrokerContract::class);
    }
}

if (! function_exists('crossover')) {
    function crossover(array $x, array $y): bool
    {
        if (empty($y) || empty($x)) {
            return false;
        }

        return prev($x) <= prev($y) && end($x) > end($y);
    }
}

if (! function_exists('crossunder')) {
    function crossunder(array $x, array $y): bool
    {
        if (empty($y) || empty($x)) {
            return false;
        }

        return prev($x) >= prev($y) && end($x) < end($y);
    }
}
