<?php

declare(strict_types=1);

namespace App\P016_PowerDigitSum;

class PowerDigitSummarizer
{
    public function summarize($base, $exponent): int
    {
        return array_sum(
            str_split(
                sprintf('%.0f', $base ** $exponent)
            )
        );
    }
}
