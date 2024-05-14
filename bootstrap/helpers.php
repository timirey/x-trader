<?php

use App\Contracts\IndicatorContract;

if (!function_exists('indicator')) {
    /**
     * Get the indicator service.
     *
     * @return IndicatorContract
     */
    function indicator(): IndicatorContract
    {
        return app(IndicatorContract::class);
    }
}
