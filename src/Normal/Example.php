<?php

namespace App\Normal;

final class Example
{
    public function getWisdomGroup(int $age): string
    {
        if (15 > $age) {
            return 'Little Chipmunk';
        }

        if (35 > $age) {
            return 'Wild Tiger';
        }

        if (55 > $age) {
            return 'Majestic Elephant';
        }

        if (75 > $age) {
            return 'Grey Monkey';
        }

        return 'Sportive Snail';
    }
}
