<?php

declare(strict_types=1);

namespace App\Utilities;

class PrimesGenerator
{
    private const BASE_PRIME = 2;

    private array $primes = [];

    private int $current;

    public function generate(int $howMany): array
    {
        $this->resetCurrent();

        while ($this->countPrimes() < $howMany) {
            $this->handleCurrentNumber();
        }

        return $this->primes;
    }

    public function generateUpTo(int $upTo): array
    {
        $this->resetCurrent();

        while ($this->current < $upTo) {
            $this->handleCurrentNumber();
        }

        return $this->primes;
    }

    private function handleCurrentNumber(): void
    {
        if ($this->isPrime($this->current)) {
            $this->pushPrime($this->current);
        }

        $this->incrementCurrent();
    }

    private function isPrime(int $num): bool
    {
        foreach ($this->primes as $prime) {
            if ($num % $prime === 0) {
                return false;
            }
        }

        return true;
    }

    private function incrementCurrent(): void
    {
        $this->current += $this->current < 3 ? 1 : 2;
    }

    private function resetCurrent(): void
    {
        $this->current = self::BASE_PRIME;
    }

    private function pushPrime(int $prime): void
    {
        $this->primes[] = $prime;
    }

    private function countPrimes(): int
    {
        return count($this->primes);
    }
}
