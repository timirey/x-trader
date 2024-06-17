<?php

declare(strict_types=1);

namespace App\Modules\Trader\Interfaces;

interface IndicatorInterface
{
    public function calculate(): array;
}
