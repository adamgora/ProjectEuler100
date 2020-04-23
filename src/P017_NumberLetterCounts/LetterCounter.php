<?php

declare(strict_types=1);

namespace App\P017_NumberLetterCounts;

class LetterCounter
{
    private const BASE_VALUES = [
        1 => 3,
        2 => 3,
        3 => 5,
        4 => 4,
        5 => 4,
        6 => 3,
        7 => 5,
        8 => 5,
        9 => 4
    ];

    public function countUpTo(int $limit): int
    {
        $sum = 0;

        $sum += $this->getOnesRemainder($limit);

        var_dump($limit, $sum);
        return $sum;
    }

    private function getOnesRemainder(int $limit): int
    {
        $ones = $limit % 10;

        if (!$ones) {
            return 0;
        }

        return array_sum(array_slice(self::BASE_VALUES, 1, $ones));

    }
}
