<?php
declare(strict_types=1);

namespace App\P005_SmallestMultiple;

class SmallestMultiple
{
    public function calculate(int $max): int
    {
        $maxFactorizations = [];

        foreach (range(2, $max) as $number) {
            $primeFactorization = $this->getPrimeFactorization($number);
            $values = array_count_values($primeFactorization);

            foreach ($values as $base => $exponent) {
                if (!isset($maxFactorizations[$base])) {
                    $maxFactorizations[$base] = $exponent;
                } elseif ($exponent > $maxFactorizations[$base]) {
                    $maxFactorizations[$base] = $exponent;
                }
            }
        }

        $result = 1;
        foreach ($maxFactorizations as $base => $exponent) {
            $result *= $base ** $exponent;
        }

        return $result;

    }

    private function getPrimeFactorization(int $number): array
    {
        for ($i = 2; $i < $number; ++$i) {
            if ($number % $i === 0) {
                return array_merge([$i], $this->getPrimeFactorization($number / $i));
            }
        }

        return [$i];
    }
}