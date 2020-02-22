<?php

declare(strict_types=1);

namespace App\P007_10001stPrime;

use App\Utilities\PrimesGenerator;

class NthPrimeCalculator
{
    public function calculate(int $num): int
    {
        $primesGenerator = new PrimesGenerator();

        $upTo = $this->setMaxApproximate($num);
        $primes = $primesGenerator->generate($upTo);

        return $this->returnNthPrime($primes, $num);
    }

    /**
     * Approximate nth prime number is calculated using Prime Number Theorem.
     *
     * @param int $num
     * @return int
     */
    private function setMaxApproximate(int $num): int
    {
        return (int) floor((log($num) + log(log($num - 1))) * $num) - 1;
    }

    /**
     * @param array $primes
     * @param int $num
     * @return int
     */
    private function returnNthPrime(array $primes, int $num): int
    {
        return $primes[$num -1];
    }
}
