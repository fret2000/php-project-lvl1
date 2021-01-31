<?php

namespace Brain\Games;

use Brain\Games\Game;

use function cli\line;
use function cli\prompt;

class Gcd extends Game
{
    protected $generalQuestion = 'Find the greatest common divisor of given numbers.';

    protected function generateQuestion()
    {
        $value1 = rand(3, 99);
        $value2 = rand(6, 99);

        $this->currentQuestion = $value1 . ' ' . $value2;
        for ($i = round(max($value1, $value2) / 2); $i >= 1; $i--) {
            if ($value1 % $i == 0 && $value2 % $i == 0) {
                $this->correctAnswer = $i;
                break;
            }
        }
    }
}
