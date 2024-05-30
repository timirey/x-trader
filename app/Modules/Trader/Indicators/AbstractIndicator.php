<?php

namespace App\Modules\Trader\Indicators;

use App\Modules\Trader\Collections\CandleCollection;

abstract class AbstractIndicator
{
    protected array $config = [];

    public function __construct(protected CandleCollection $candles, array $config = [])
    {
        $this->buildConfig($config);
    }

    public function __invoke(): array
    {
        return $this->calculate();
    }

    protected function buildConfig(array $config): void
    {
        $this->config = array_merge_recursive_distinct($this->config, $config);
    }

    abstract public function calculate(): array;
}
