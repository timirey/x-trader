<?php

namespace App\Modules\Trader\Indicators;

use App\Modules\Trader\Collections\CandleCollection;
use App\Modules\Trader\Interfaces\IndicatorInterface;

abstract class AbstractIndicator implements IndicatorInterface
{
    protected array $config = [];

    public function __construct(protected CandleCollection $candles, array $config = [])
    {
        $this->config = array_merge_recursive_distinct($this->config, $config);
    }
}
