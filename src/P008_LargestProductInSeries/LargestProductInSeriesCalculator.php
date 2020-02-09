<?php
declare(strict_types=1);

namespace App\P008_LargestProductInSeries;

class LargestProductInSeriesCalculator
{
    public function calculate(array $series, int $digits): int
    {
        $result = 0;
        $currentIndex = 0;
        $maxIndex = count($series) + 1 - $digits;

        while ($currentIndex < $maxIndex) {
            $product = array_product(array_slice($series, $currentIndex, $digits));
            if($product > $result) {
                $result = $product;
            }
            $currentIndex++;
        }

        return $result;
    }
}