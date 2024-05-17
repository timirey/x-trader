<?php

use App\Contracts\TraderContract;

if (! function_exists('trader')) {
    /**
     * Get the indicator service.
     */
    function indicator(): TraderContract
    {
        return app(TraderContract::class);
    }
}
