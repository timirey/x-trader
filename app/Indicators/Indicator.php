<?php

namespace App\Indicators;

use App\Collections\CandleCollection;

abstract class Indicator
{
    protected array $config = [];

    public function __construct(protected CandleCollection $candles, array $config = [])
    {
        $this->buildConfig($config);
    }

    protected function buildConfig(array $config): void
    {
        $this->config = array_merge_recursive_distinct($this->config, $config);
    }

    abstract public function calculate(): array;
}
