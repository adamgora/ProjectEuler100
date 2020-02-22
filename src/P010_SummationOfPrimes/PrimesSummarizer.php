<?php

declare(strict_types=1);

namespace App\P010_SummationOfPrimes;

use App\Utilities\PrimesGenerator;

class PrimesSummarizer
{
    public function summarize(int $upTo): int
    {
        $primesGenerator = new PrimesGenerator();
        $primes = $primesGenerator->generate($upTo - 1);
        return $this->filterAndSum($primes);

    }

    private function filterAndSum(array $primes): int
    {
        array_pop($primes);
        return array_sum($primes);
    }
}
