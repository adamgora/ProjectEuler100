<?php

declare(strict_types=1);

namespace App\P007_10001stPrime;

use App\Utilities\PrimesGenerator;

class NthPrimeCalculator
{
    public function calculate(int $num): int
    {
        $primes = (new PrimesGenerator())->generate($num);
        return $primes[count($primes) - 1];
    }
}
