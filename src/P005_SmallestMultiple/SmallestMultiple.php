<?php

declare(strict_types=1);

namespace App\P005_SmallestMultiple;

use App\Utilities\PrimeFactorizer;

class SmallestMultiple
{
    private array $maxFactorizations;

    public function __construct()
    {
        $this->setMaxFactorizations([]);
    }

    public function calculate(int $max): int
    {
        foreach (range(2, $max) as $number) {
            $factorsAndExponents = array_count_values(PrimeFactorizer::factorize($number));
            $this->updateMaxFactorizations($factorsAndExponents);
        }

        return $this->multiplyMaxFactorizations();
    }

    /**
     * @return int
     */
    private function multiplyMaxFactorizations(): int
    {
        $result = 1;
        foreach ($this->getMaxFactorizations() as $base => $exponent) {
            $result *= $base ** $exponent;
        }

        return $result;
    }

    /**
     * @return array
     */
    public function getMaxFactorizations(): array
    {
        return $this->maxFactorizations;
    }

    /**
     * @param array $maxFactorizations
     */
    public function setMaxFactorizations(array $maxFactorizations): void
    {
        $this->maxFactorizations = $maxFactorizations;
    }

    /**
     * @param array $factorsAndExponents
     */
    private function updateMaxFactorizations(array $factorsAndExponents): void
    {
        $maxFactorizations = $this->getMaxFactorizations();

        foreach ($factorsAndExponents as $base => $exponent) {
            if (!isset($maxFactorizations[$base])) {
                $maxFactorizations[$base] = $exponent;
            } elseif ($exponent > $maxFactorizations[$base]) {
                $maxFactorizations[$base] = $exponent;
            }
        }

        $this->setMaxFactorizations($maxFactorizations);
    }
}
