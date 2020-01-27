<?php
declare(strict_types=1);

namespace App\Utilities;

class PrimeFactorizer
{
    public static function factorize(int $number): array
    {
        for ($i = 2; $i < $number; ++$i) {
            if ($number % $i === 0) {
                return array_merge([$i], self::factorize($number / $i));
            }
        }

        return [$i];
    }
}