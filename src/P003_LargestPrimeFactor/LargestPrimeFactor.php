<?php

declare(strict_types=1);

namespace App\P003_LargestPrimeFactor;

use App\Utilities\PrimeFactorizer;

class LargestPrimeFactor
{
    public function get(int $number): int
    {
        $primeFactors = PrimeFactorizer::factorize($number);

        return max($primeFactors);
    }
}
