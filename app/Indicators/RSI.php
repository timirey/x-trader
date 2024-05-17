<?php

namespace App\Indicators;

final class RSI extends Indicator
{
    protected array $config = [
        'timePeriod' => 14,
    ];

    public function calculate(): array
    {
        return trader_rsi($this->candles->closes(), $this->config['timePeriod']) ?: [];
    }
}