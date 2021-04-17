<?php

declare(strict_types=1);

namespace App\P004_LargestPalindromeProduct;

class LargestPalindromeProduct
{
    private int $min;

    private int $max;

    private array $palindromeNumbers;

    /**
     * LargestPalindromeProduct constructor.
     */
    public function __construct(int $howManyDigitsInFactors)
    {
        $this->min = 10 ** ($howManyDigitsInFactors - 1);
        $this->max = 10 ** $howManyDigitsInFactors - 1;
        $this->palindromeNumbers = $this->getPalindromeNumbers();
    }

    public function calculate(): int
    {
        for ($i = count($this->palindromeNumbers) - 1; $i > 0; --$i) {
            $palindrome = $this->palindromeNumbers[$i];
            if ($this->checkPalindromeUsingDivision($palindrome)) {
                return $palindrome;
            }
        }

        return 0;
    }

    private function getPalindromeNumbers(): array
    {
        return array_map(static function (int $item) {
            $stringItem = (string) $item;

            return (int) ($stringItem . strrev($stringItem));
        }, range($this->min, $this->max, 1));
    }

    private function checkPalindromeUsingDivision(int $palindromeNumber): bool
    {
        for ($i = $this->max; $i > $this->min; --$i) {
            if ($palindromeNumber % $i === 0 && $palindromeNumber / $i <= $this->max) {
                return true;
            }
        }

        return false;
    }
}
