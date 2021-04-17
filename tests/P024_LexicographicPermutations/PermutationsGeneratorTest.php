<?php

declare(strict_types=1);

use App\P024_LexicographicPermutations\PermutationsGenerator;
use PHPUnit\Framework\TestCase;

class PermutationsGeneratorTest extends TestCase
{
    public static PermutationsGenerator $generator;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        static::$generator = new PermutationsGenerator();
    }

    /**
     * @dataProvider cases
     */
    public function testGetSum(int $index, int $expectedResult): void
    {
        self::assertEquals($expectedResult, static::$generator->getNthPermutation($index));
    }

    public function cases(): array
    {
        return [
            [699999, 1938246570],
            [899999, 2536987410],
            [900000, 2537014689],
            [999999, 2783915460],
        ];
    }
}
