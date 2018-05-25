<?php

namespace App\Tests\Unit;

use App\Good\BetterExample;
use PHPUnit\Framework\TestCase;

class BetterExampleTest extends TestCase
{
    /**
     * @dataProvider wisdomGroupProvider
     */
    public function testWisdomGroupIsCalculatedOnAge(int $age, string $group)
    {
        $example = new BetterExample();
        $actual = $example->getWisdomGroup($age);
        $this->assertEquals($group, $actual);
    }

    public function wisdomGroupProvider(): array
    {
        return [
            [8, 'Little Chipmunk'],
            [24, 'Wild Tiger'],
            [44, 'Majestic Elephant'],
            [72, 'Grey Monkey'],
            [84, 'Sportive Snail'],
        ];
    }

    public function testAgeLessThanReturnsFalseForHigherAge()
    {
        $value = (new BetterExample())->isAgeLess(0, 1);
        $this->assertFalse($value);

    }

    public function testAgeLessThanReturnsTrueForLowerAge()
    {
        $value = (new BetterExample())->isAgeLess(1, 0);
        $this->assertTrue($value);

    }

    public function testAgeLessThanReturnsFalseForEqualAge()
    {
        $value = (new BetterExample())->isAgeLess(1, 1);
        $this->assertFalse($value);
    }
}
