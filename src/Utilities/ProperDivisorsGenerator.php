<?php
declare(strict_types=1);

namespace App\Utilities;

class ProperDivisorsGenerator
{
    public static function generate(int $number): array
    {
        $result = [1];
        $limit = sqrt($number);

        for ($i = 2; $i <= $limit; ++$i) {

            if ($number % $i === 0 ) {
                $result[] = $i;
                $result[] = $number / $i;
            }
        }

        $result = array_values(array_unique($result));

        sort($result);
        return $result;
    }
}