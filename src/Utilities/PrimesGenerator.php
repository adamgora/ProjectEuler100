<?php

declare(strict_types=1);

namespace App\Utilities;

class PrimesGenerator
{
    private const BASE_PRIME = 2;

    private array $numbers = [];

    private int $max;

    public function generate(int $upTo): array
    {
        $this->setMax($upTo);

        $this->setNumbersArray();
        $this->sieveForPrimes();

        return $this->numbers;
    }

    private function setNumbersArray(): void
    {
        $this->numbers = array_fill(self::BASE_PRIME, $this->max, true);
    }

    private function setMax(int $max): void
    {
        $this->max = $max;
    }

    private function sieveForPrimes(): void
    {
        for ($i = 2, $iMax = sqrt($this->max); $i < $iMax; ++$i) {
            if ($this->numbers[$i]) {
                $this->setMultipliesOfPrimeAsFalse($i);
            }
        }

        $this->filterNumbers();
    }

    private function setMultipliesOfPrimeAsFalse(int $prime): void
    {
        for ($i = $prime ** 2, $j = 1; $i <= $this->max; $i = $prime ** 2 + $j * $prime, $j++) {
            $this->numbers[$i] = false;
        }
    }

    private function filterNumbers(): void
    {
        $this->numbers = array_keys(
            array_filter($this->numbers, fn (bool $element) => $element)
        );
    }
}
