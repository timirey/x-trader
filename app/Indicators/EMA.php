<?php

namespace App\Indicators;

final class EMA extends Indicator
{
    protected array $config = [
        'timePeriod' => 8,
    ];

    public function calculate(): array
    {
        return trader_ema($this->candles->closes(), $this->config['timePeriod']) ?: [];
    }
}
