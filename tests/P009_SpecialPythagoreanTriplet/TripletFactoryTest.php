<?php

declare(strict_types=1);

use App\P009_SpecialPythagoreanTriplet\Exceptions\TripletNotFoundException;
use App\P009_SpecialPythagoreanTriplet\TripletFactory;
use PHPUnit\Framework\TestCase;

class TripletFactoryTest extends TestCase
{
    /**
     * @var TripletFactory
     */
    private TripletFactory $factory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->factory = new TripletFactory();
    }

    /**
     * @param int $sumOfTriplets
     * @param $expectedProduct
     * @dataProvider cases
     *
     * @throws TripletNotFoundException
     */
    public function testMake(int $sumOfTriplets, $expectedProduct): void
    {
        $triplet = $this->factory->make($sumOfTriplets);

        if (is_array($expectedProduct)) {
            $this->assertContains($triplet->getProduct(), $expectedProduct);
        } else {
            $this->assertEquals($triplet->getProduct(), $expectedProduct);
        }
    }

    /**
     * @throws TripletNotFoundException
     */
    public function testIfMakeThrowsExceptionIfNoTripletFound(): void
    {
        $this->expectException(TripletNotFoundException::class);
        $this->factory->make(2);
    }

    /**
     * @return array
     */
    public function cases()
    {
        return [
            [24, 480],
            [120, [49920, 55080, 60000]],
            [1000, 31875000],
        ];
    }
}
