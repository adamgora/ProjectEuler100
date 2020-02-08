<?php
declare(strict_types=1);

namespace App\P007_10001stPrime;

class NthPrimeCalculator
{
    private array $primes = [];

    public function calculate(int $num): int
    {
        $currentNumber = $this->primes ? $this->getLastPrime() : 2;

        while ($this->countPrimes() < $num) {

            if($this->isPrime($currentNumber)) {
                $this->pushPrime($currentNumber);
            }

            $currentNumber += $currentNumber < 3 ? 1 : 2;

        }

        return $this->getLastPrime();
    }

    private function pushPrime(int $prime): void
    {
        $this->primes[] = $prime;
    }

    private function getLastPrime(): int
    {
        return $this->primes[$this->countPrimes() - 1];
    }

    private function countPrimes(): int
    {
        return sizeof($this->primes);
    }

    private function isPrime(int $num): bool
    {
        foreach ($this->primes as $prime) {
            if($num % $prime === 0) {
                return false;
            }
        }

        return true;
    }
}