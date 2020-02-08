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
     *
     * @param int $howManyDigitsInFactors
     */
    public function __construct(int $howManyDigitsInFactors)
    {
        $this->min = 10 ** ($howManyDigitsInFactors - 1);
        $this->max = 10 ** $howManyDigitsInFactors - 1;
        $this->palindromeNumbers = $this->getPalindromeNumbers();
    }

    /**
     * @return int
     */
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

    /**
     * @return array
     */
    private function getPalindromeNumbers(): array
    {
        return array_map(static function (int $item) {
            return (int) ($item . strrev($item));
        }, range($this->min, $this->max, 1));
    }

    /**
     * @param int $palindromeNumber
     *
     * @return bool
     */
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
