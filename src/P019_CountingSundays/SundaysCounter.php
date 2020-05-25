<?php

declare(strict_types=1);

namespace App\P019_CountingSundays;

class SundaysCounter
{
    public function countInRange(int $yearFrom, int $yearTo): int
    {
        $dateFrom = (new \DateTime())->setDate($yearFrom, 1, 1);
        $dateTo = (new \DateTime())->setDate($yearTo, 12, 31);
        $count = 0;

        while ($dateFrom < $dateTo) {
            if ('0' === $dateFrom->format('w')) {
                ++$count;
            }
            $dateFrom->add(new \DateInterval('P1M'));
        }

        return $count;
    }
}
