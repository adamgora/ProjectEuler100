<?php

declare(strict_types=1);

namespace App\P012_HighlyDivisibleTriangularNumber;

use App\Utilities\PrimeFactorizer;

class NumberSearch
{
    public function findNumberWithDivisorsCount(int $expectedDivisorsCount): int
    {
        $currentTriangularNumber = 0;
        $currentNumber = 1;
        $divisorsCount = 0;

        while ($divisorsCount < $expectedDivisorsCount) {
            $currentTriangularNumber += $currentNumber;

            $primes = PrimeFactorizer::factorize($currentTriangularNumber);

            $divisorsCount = array_reduce(array_count_values($primes), static function ($carry, $item) {
                $carry *= ($item + 1);

                return $carry;
            }, 1);

            ++$currentNumber;
        }

        return $currentTriangularNumber;
    }
}
