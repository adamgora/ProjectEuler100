<?php

declare(strict_types=1);

namespace App\P009_SpecialPythagoreanTriplet;

class Triplet
{
    public function __construct(private int $a, private int $b, private int $c)
    {
    }

    public function getProduct()
    {
        return $this->a * $this->b * $this->c;
    }
}
