<?php
declare(strict_types=1);

namespace App\Utilities;

class Factorial
{
    public static function of(int $number): float
    {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}