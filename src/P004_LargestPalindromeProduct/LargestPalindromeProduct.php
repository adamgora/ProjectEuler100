<?php

namespace App\P004_LargestPalindromeProduct;

class LargestPalindromeProduct
{
    private int $min;
    private int $max;
    private array $palindromeNumbers;

    public function __construct(int $howManyDigitsInFactors)
    {
        $this->min = 10 ** ($howManyDigitsInFactors - 1);
        $this->max = 10 ** $howManyDigitsInFactors - 1;
        $this->palindromeNumbers = $this->getPalindromeNumbers();
    }

    public function calculate(): int
    {
        for ($j = count($this->palindromeNumbers) - 1; $j > 0; --$j) {
            for ($i = $this->max; $i > $this->min; --$i) {
                if ($this->palindromeNumbers[$j] % $i === 0 && $this->palindromeNumbers[$j] / $i <= $this->max) {
                    return $this->palindromeNumbers[$j];
                }
            }
        }
    }

    private function getPalindromeNumbers(): array
    {
        return array_map(static function (int $item) {
            return (int)($item . strrev($item));
        }, range($this->min, $this->max, 1));
    }
}