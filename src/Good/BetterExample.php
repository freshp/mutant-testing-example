<?php

namespace App\Good;

final class BetterExample
{
    const TRESHOLD_CHIPMUNK = 15;
    const TRESHOLD_TIGER = 35;
    const TRESHOLD_ELEPHANT = 55;
    const TRESHOLD_MONKEY = 75;

    public function getWisdomGroup(int $age): string
    {
        if ($this->isAgeLess(self::TRESHOLD_CHIPMUNK, $age)) {
            return 'Little Chipmunk';
        }

        if ($this->isAgeLess(self::TRESHOLD_TIGER, $age)) {
            return 'Wild Tiger';
        }

        if ($this->isAgeLess(self::TRESHOLD_ELEPHANT, $age)) {
            return 'Majestic Elephant';
        }

        if ($this->isAgeLess(self::TRESHOLD_MONKEY, $age)) {
            return 'Grey Monkey';
        }

        return 'Sportive Snail';
    }

    public function isAgeLess(int $treshold, int $age): bool
    {
        return ($treshold > $age);
    }
}
