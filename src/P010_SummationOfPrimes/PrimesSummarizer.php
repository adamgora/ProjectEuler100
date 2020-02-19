<?php
declare(strict_types=1);

namespace App\P010_SummationOfPrimes;

use App\Utilities\PrimesGenerator;

class PrimesSummarizer
{
    public function summarize(int $upTo): int
    {
        $primes = (new PrimesGenerator())->generateUpTo($upTo);
        return array_sum($primes);
    }
}