<?php

declare(strict_types=1);

namespace App\P011_LargestProductInGrid;

class GridProductFinder
{
    private int $offset;

    private int $rowLength;

    private int $colLength;

    private array $grid;

    /**
     * @param array $grid
     * @param int $numbers
     *
     * @return int
     */
    public function find(array $grid, int $numbers): int
    {
        $maxProduct = 0;

        $this->grid = $grid;
        $this->offset = $numbers;
        $this->rowLength = count($grid);
        $this->colLength = count($grid[0]);

        for ($rowIndex = 0; $rowIndex <= $this->rowLength - 1; ++$rowIndex) {
            for ($colIndex = 0, $colLimit = $this->colLength - 1; $colIndex <= $colLimit; ++$colIndex) {
                $highestProduct = $this->getMaxProductInAllDirections($rowIndex, $colIndex);

                if ($highestProduct > $maxProduct) {
                    $maxProduct = $highestProduct;
                }
            }
        }

        return $maxProduct;
    }

    /**
     * @param int $rowIndex
     * @param int $colIndex
     *
     * @return int
     */
    private function getMaxProductInAllDirections(int $rowIndex, int $colIndex): int
    {
        return max([
            $this->getProductInRow($rowIndex, $colIndex),
            $this->getProductInColumn($rowIndex, $colIndex),
            $this->getProductInRightDiagonal($rowIndex, $colIndex),
            $this->getProductInLeftDiagonal($rowIndex, $colIndex),
        ]);
    }

    /**
     * @param int $rowIndex
     * @param int $colIndex
     *
     * @return int
     */
    private function getProductInRow(int $rowIndex, int $colIndex): int
    {
        if ($this->cannotSearchInRow($colIndex)) {
            return 0;
        }

        return array_product(array_slice($this->grid[$rowIndex], $colIndex, $this->offset));
    }

    /**
     * @param int $rowIndex
     * @param int $colIndex
     *
     * @return int
     */
    private function getProductInColumn(int $rowIndex, int $colIndex): int
    {
        if ($this->cannotSearchInColumn($rowIndex)) {
            return 0;
        }

        return array_product(
            array_column(array_slice($this->grid, $rowIndex, $this->offset), $colIndex)
        );
    }

    /**
     * @param $rowIndex
     * @param $colIndex
     *
     * @return int
     */
    private function getProductInRightDiagonal($rowIndex, $colIndex): int
    {
        if ($this->cannotSearchInRightDiagonal($rowIndex, $colIndex)) {
            return 0;
        }

        $product = 1;

        for ($i = 0; $i < $this->offset; ++$i) {
            $product *= $this->grid[$rowIndex + $i][$colIndex + $i];
        }

        return $product;
    }

    /**
     * @param $rowIndex
     * @param $colIndex
     *
     * @return int
     */
    private function getProductInLeftDiagonal($rowIndex, $colIndex): int
    {
        if ($this->cannotSearchInLeftDiagonal($rowIndex, $colIndex)) {
            return 0;
        }

        $product = 1;

        for ($i = 0; $i < $this->offset; ++$i) {
            $product *= $this->grid[$rowIndex + $i][$colIndex - $i];
        }

        return $product;
    }

    /**
     * @param int $colIndex
     *
     * @return bool
     */
    private function cannotSearchInRow(int $colIndex): bool
    {
        return $colIndex + $this->offset > $this->rowLength;
    }

    /**
     * @param int $rowIndex
     *
     * @return bool
     */
    private function cannotSearchInColumn(int $rowIndex): bool
    {
        return $rowIndex + $this->offset > $this->rowLength;
    }

    /**
     * @param $rowIndex
     * @param $colIndex
     *
     * @return bool
     */
    private function cannotSearchInRightDiagonal($rowIndex, $colIndex): bool
    {
        return $colIndex + $this->offset > $this->colLength || $this->cannotSearchInColumn($rowIndex);
    }

    /**
     * @param $rowIndex
     * @param $colIndex
     *
     * @return bool
     */
    private function cannotSearchInLeftDiagonal($rowIndex, $colIndex): bool
    {
        return $colIndex < $this->offset - 1 || $this->cannotSearchInColumn($rowIndex);
    }
}
