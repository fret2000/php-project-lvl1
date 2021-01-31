<?php

namespace Brain\Games;

use Brain\Games\Game;

use function cli\line;
use function cli\prompt;

class Progression extends Game
{
    protected $generalQuestion = 'What is the result of the expression?';

    protected function generateQuestion()
    {
        $startValue = rand(3, 10);
        $incValue = rand(2, 15);
        $missing = rand(3, 7);
        $total = rand(7, 15);

        $current = $startValue;
        $this->currentQuestion = '';
        for ($i = 1; $i <= $total; $i++) {
            if ($i == $missing) {
                $this->currentQuestion .= '.. ';
                $this->correctAnswer = $current;
            } else {
                $this->currentQuestion .= $current . ' ';
            }
            $current += $incValue;
        }
    }
}
