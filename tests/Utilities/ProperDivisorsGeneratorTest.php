<?php
declare(strict_types=1);

use App\Utilities\ProperDivisorsGenerator;
use PHPUnit\Framework\TestCase;

class ProperDivisorsGeneratorTest extends TestCase
{
    /** @dataProvider numbersDataProvider */
    public function testGenerate(int $number, array $expectedResult): void
    {
        self::assertSame($expectedResult, ProperDivisorsGenerator::generate($number));
    }

    public function numbersDataProvider(): array
    {
        return [
            [36, [1, 2, 3, 4, 6, 9, 12, 18]],
            [64, [1, 2, 4, 8, 16, 32]],
            [93, [1, 3, 31]],
            [100, [1, 2, 4, 5, 10, 20, 25, 50]],
        ];
    }
}