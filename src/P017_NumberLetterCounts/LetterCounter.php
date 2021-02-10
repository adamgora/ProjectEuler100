<?php

declare(strict_types=1);

namespace App\P017_NumberLetterCounts;

class LetterCounter
{
    private const ONES = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];

    private const TEENS = ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];

    private const TENS = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];

    public function countUpTo(int $limit): int
    {
        $sum = 0;

        foreach (range(1, $limit) as $item) {
            $sum += $this->getLetterCount($item);
        }

        return $sum;
    }

    private function getLetterCount($item): int
    {
        $sum = 0;

        if ($item >= 1000) {
            $sum += strlen($this->getThousandsPartial($item));
            $item = $this->countRemainder($item, 1000);
        }

        if ($item >= 100) {
            $sum += strlen($this->getHundredsPartial($item));
            $item = $this->countRemainder($item, 100);
        }

        if ($item >= 20) {
            $sum += strlen($this->getTensPartial($item));
            $item = $this->countRemainder($item, 10);
        }

        if ($item >= 10) {
            $sum += strlen($this->getTeensPartial($item));
            $item = 0;
        }

        if ($item > 0) {
            $sum += strlen($this->getOnesPartial($item));
        }

        return $sum;
    }

    private function getThousandsPartial($number): string
    {
        return self::ONES[floor($number / 1000) - 1] . 'thousand';
    }

    private function getHundredsPartial($number): string
    {
        return self::ONES[floor($number / 100) - 1] . 'hundred' . (0 === $number % 100 ? '' : 'and');
    }

    private function getTensPartial(int $item): string
    {
        return self::TENS[floor($item / 10) - 2];
    }

    private function getTeensPartial($number): string
    {
        return self::TEENS[floor($number % 10)];
    }

    private function getOnesPartial($number): string
    {
        return self::ONES[$number - 1];
    }

    private function countRemainder($number, int $int): int
    {
        return $number % $int;
    }
}
