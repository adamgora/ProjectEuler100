<?php

declare(strict_types=1);

namespace App\P018_MaximumPathSum;

class MaximumPathSum
{
    public function calculate(array $triangle): int
    {
        while (count($triangle) > 1) {
            $triangleBaseRemoved = array_pop($triangle);
            $currentTriangleSize = count($triangle);
            $currentTriangleBase = $triangle[$currentTriangleSize - 1];

            for ($i = 0, $iMax = count($currentTriangleBase) - 1; $i < $iMax; ++$i) {
                if (0 === $currentTriangleBase[$i]) {
                    break;
                }

                $currentTriangleBase[$i] += max($triangleBaseRemoved[$i], $triangleBaseRemoved[$i + 1]);
            }

            $triangle[$currentTriangleSize - 1] = $currentTriangleBase;
        }

        return $triangle[0][0];
    }
}
