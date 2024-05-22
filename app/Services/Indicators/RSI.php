<?php

namespace App\Services\Indicators;

use App\Abstracts\AbstractIndicator;

final class RSI extends AbstractIndicator
{
    protected array $config = [
        'timePeriod' => 14,
    ];

    public function calculate(): array
    {
        return trader_rsi($this->candles->closes(), $this->config['timePeriod']) ?: [];
    }
}
