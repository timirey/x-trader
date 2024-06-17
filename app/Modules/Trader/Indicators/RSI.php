<?php

declare(strict_types=1);

namespace App\Modules\Trader\Indicators;

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
