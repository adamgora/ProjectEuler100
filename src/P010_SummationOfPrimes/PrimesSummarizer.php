<?php

declare(strict_types=1);

namespace App\P010_SummationOfPrimes;

class PrimesSummarizer
{
    private array $numbers = [];
    private int $max;

    public function summarize(int $upTo): int
    {
        $this->setMax($upTo - 1);
        $this->setNumbersArray();
        $this->sieveForPrimes();

        return $this->filterAndSum();

    }

    private function setNumbersArray(): void
    {
        $this->numbers = array_fill(2, $this->max, true);
    }

    private function setMax(int $max): void
    {
        $this->max = $max;
    }

    private function sieveForPrimes(): void
    {
        for ($i = 2, $iMax = sqrt($this->max); $i < $iMax; $i++) {
            if ($this->numbers[$i]) {
                $this->setMultipliesOfPrimeAsFalse($i);
            }
        }
    }

    /**
     * @param int $prime
     */
    private function setMultipliesOfPrimeAsFalse(int $prime): void
    {
        for ($i = $prime ** 2, $j = 1; $i <= $this->max; $i = $prime ** 2 + $j * $prime, $j++) {
            $this->numbers[$i] = false;
        }
    }

    private function filterAndSum(): int
    {
        array_pop($this->numbers);

        return array_sum(
            array_keys(
                array_filter($this->numbers, fn(bool $element) => $element)
            )
        );
    }
}
