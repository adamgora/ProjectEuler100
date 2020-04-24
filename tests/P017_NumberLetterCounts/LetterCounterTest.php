<?php

declare(strict_types=1);

use App\P017_NumberLetterCounts\LetterCounter;
use PHPUnit\Framework\TestCase;

class LetterCounterTest extends TestCase
{
    /**
     * @var LetterCounter
     */
    private LetterCounter $counter;

    protected function setUp(): void
    {
        parent::setUp();
        $this->counter = new LetterCounter();
    }

    /**
     * @param int $limit
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCount(int $limit, int $expectedResult)
    {
        $this->assertEquals($this->counter->countUpTo($limit), $expectedResult);
    }

    public function cases()
    {
        return [
            [5, 19],
            [25, 19],
            [101, 19],
            [150, 1903],
            [1000, 21124],
        ];
    }
}
