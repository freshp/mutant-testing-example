<?php

namespace App\Tests\Unit;

use App\Normal\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @dataProvider wisdomGroupProvider
     */
    public function testWisdomGroupIsCalculatedOnAge(int $age, string $group)
    {
        $example = new Example();
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
}
