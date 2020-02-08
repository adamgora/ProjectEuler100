<?php

declare(strict_types=1);

namespace App\P006_SumSquareDifference;

class SumSquareDifference
{
    public function get(int $num): int
    {
        $squareOfTheSum = (($num * ($num + 1)) / 2) ** 2;
        $sumOfSquares = ($num * ($num + 1) * (2 * $num + 1)) / 6;

        return $squareOfTheSum - $sumOfSquares;
    }
}
