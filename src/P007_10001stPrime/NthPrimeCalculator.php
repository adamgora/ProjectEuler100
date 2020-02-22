<?php

declare(strict_types=1);

namespace App\P007_10001stPrime;

use App\Utilities\PrimesGenerator;

class NthPrimeCalculator
{
    private array $numbers = [];
    private int $max;

    public function calculate(int $num): int
    {
        $this->setMaxApproximate($num);
        $this->setNumbersArray();
        $this->sieveForPrimes();

        return $this->returnNthPrime($num);
    }

    private function setNumbersArray(): void
    {
        $this->numbers = array_fill(2, $this->max, true);
    }

    private function setMaxApproximate(int $num): void
    {
        $this->max = (int) floor((log($num) + log(log($num - 1))) * $num) - 1;
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

    private function returnNthPrime(int $num): int
    {
        $numbers = array_keys(
            array_filter($this->numbers, fn(bool $element) => $element)
        );

        return $numbers[$num -1];
    }
}
