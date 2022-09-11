<?php

use Akaunting\Money\Currency;
use Akaunting\Money\Money;

if (!function_exists('money')) {
    function money(mixed $amount, string $currency = null, bool $convert = false, int $precision = null): Money
    {
        return new Money($amount, currency($currency ?: 'USD', $precision), $convert);
    }
}

if (!function_exists('currency')) {
    function currency(string $currency, int $precision = null): Currency
    {
        if (is_int($precision)) {
            return (new Currency($currency))->setPrecision($precision);
        }
        return new Currency($currency);
    }
}
