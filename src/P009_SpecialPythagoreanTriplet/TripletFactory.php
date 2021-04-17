<?php

declare(strict_types=1);

namespace App\P009_SpecialPythagoreanTriplet;

use App\P009_SpecialPythagoreanTriplet\Exceptions\TripletNotFoundException;

class TripletFactory
{
    /**
     * @throws TripletNotFoundException
     */
    public function make(int $sumOfTriplets): Triplet
    {
        for ($a = 1; $a < $sumOfTriplets; ++$a) {
            for ($b = $a; $b < $sumOfTriplets; ++$b) {
                $c = sqrt($a ** 2 + $b ** 2);

                if ((int) $c / $c < 1) {
                    continue;
                }

                if ((int) ($a + $b + $c) === $sumOfTriplets) {
                    return new Triplet($a, $b, (int) $c);
                }
            }
        }

        throw new TripletNotFoundException();
    }
}
