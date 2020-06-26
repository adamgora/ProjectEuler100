<?php
declare(strict_types=1);

namespace App\P021_AmicableNumbers;

class AmicableNumbersSummarizer
{
    public function sumNumbersUnderLimit(int $limit): int
    {
        $amicableNumbers = [];

        for ($i = $limit; $i > 1; --$i) {

            $divisors = $this->getDivisors($i);
            $sumOfDivisors = array_sum($divisors);

            if ($sumOfDivisors === $i) {
                continue;
            }

            $divisorsOfSecondNumber = $this->getDivisors($sumOfDivisors);
            $sumOfDivisorsOfSecondNumber = array_sum($divisorsOfSecondNumber);

            if ($sumOfDivisorsOfSecondNumber === $i) {
                $amicableNumbers[] = $i;
                $amicableNumbers[] = $sumOfDivisors;
            }
        }

        return array_sum(array_unique($amicableNumbers));
    }

    private function getDivisors(int $number): array
    {
        $divisors = [];
        $limit = sqrt($number);

        for ($i = 1; $i < $limit; $i++) {
            if ($number % $i === 0) {
                $divisors[] = $i;
                $divisors[] = $number / $i;
            }
        }
        sort($divisors);
        array_pop($divisors);
        return $divisors;
    }
}