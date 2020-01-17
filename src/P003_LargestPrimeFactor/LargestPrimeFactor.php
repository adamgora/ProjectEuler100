<?php

namespace App\P003_LargestPrimeFactor;

class LargestPrimeFactor
{
    public function get(int $number): int
    {
        $primeFactors = $this->getPrimeFactorization($number);
        return max($primeFactors);
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