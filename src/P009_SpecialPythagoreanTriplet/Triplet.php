<?php
declare(strict_types=1);

namespace App\P009_SpecialPythagoreanTriplet;

class Triplet
{
    /**
     * @var int
     */
    private int $a;
    /**
     * @var int
     */
    private int $b;
    /**
     * @var int
     */
    private int $c;

    public function __construct(int $a, int $b, int $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getProduct()
    {
        return $this->a * $this->b * $this->c;
    }
}