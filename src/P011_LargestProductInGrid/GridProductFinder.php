<?php

declare(strict_types=1);

namespace App\P011_LargestProductInGrid;

class GridProductFinder
{
    public function find(array $grid, int $numbers): int
    {
        $rows = count($grid);
        $cols = count($grid[0]);
        //$offset = $numbers;
        $offset = 2;
        $product = 0;

        //find product in each row
//        foreach ($grid as $row) {
//            for ($i = 0; $i + $offset <= $cols; $i++) {
//                $tempProduct = array_product(array_slice($row, $i, $offset));
//                if ($tempProduct > $product) {
//                    $product = $tempProduct;
//                }
//            }
//        }

        //find product in each column
        $flatArray = call_user_func_array('array_merge', $grid);
        $startKeys = array_map(fn($element) => $element * ($offset + 1), range(0, $offset - 1));

        for ($i = 0, $loopsMax = sizeof($flatArray) -1; $i + $offset < $loopsMax; $i++) {
            $tempProduct = 1;
            foreach ($startKeys as $startKey) {
                $tempProduct *= $flatArray[$startKey];
            }

            if($tempProduct > $product) {
                $product = $tempProduct;
            }

            $startKeys = array_map(fn($element) => $element + 1, $startKeys);
        }

        return $product;
    }
}
