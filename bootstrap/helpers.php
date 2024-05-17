<?php

use App\Contracts\TraderContract;

if (! function_exists('trader')) {
    function indicator(): TraderContract
    {
        return app(TraderContract::class);
    }
}

if (! function_exists('array_merge_recursive_distinct')) {
    function array_merge_recursive_distinct(array &$array1, array &$array2): array
    {
        $merged = $array1;

        foreach ($array2 as $key => &$value) {
            if (is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
                $merged[$key] = array_merge_recursive_distinct($merged[$key], $value);
            } else {
                $merged[$key] = $value;
            }
        }

        return $merged;
    }
}

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
