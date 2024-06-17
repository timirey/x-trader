<?php

declare(strict_types=1);

if (! function_exists('crossover')) {
    function crossover(array $x, array $y): bool
    {
        if (empty($y) || empty($x)) {
            return false;
        }

        return prev($x) <= prev($y) && end($x) > end($y);
    }
}

if (! function_exists('crossunder')) {
    function crossunder(array $x, array $y): bool
    {
        if (empty($y) || empty($x)) {
            return false;
        }

        return prev($x) >= prev($y) && end($x) < end($y);
    }
}
