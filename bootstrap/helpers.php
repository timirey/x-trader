<?php

use App\Contracts\IndicatorContract;

if (! function_exists('indicator')) {
    /**
     * Get the indicator service.
     */
    function indicator(): IndicatorContract
    {
        return app(IndicatorContract::class);
    }
}
