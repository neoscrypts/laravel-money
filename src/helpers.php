<?php

use Akaunting\Money\Currency;
use Akaunting\Money\Money;

if (!function_exists('money')) {
    /**
     * Instance of money class.
     *
     * @param mixed  $amount
     * @param string $currency
     * @param bool   $convert
     *
     * @return \Akaunting\Money\Money
     */
    function money($amount, $currency = null, $convert = false, int $precision = null)
    {
        return new Money($amount, currency($currency ?: 'USD', $precision), $convert);
    }
}

if (!function_exists('currency')) {
    /**
     * Instance of currency class.
     *
     * @param string $currency
     * @param int|null $precision
     *
     * @return \Akaunting\Money\Currency
     */
    function currency($currency, int $precision = null)
    {
        if (is_int($precision)) {
            return (new Currency($currency))->setPrecision($precision);
        }
        return new Currency($currency);
    }
}
