<?php

namespace Brain\Games;

use Brain\Games\Game;

use function cli\line;
use function cli\prompt;

class Calc extends Game
{
    protected $generalQuestion = 'What is the result of the expression?';

    protected function generateQuestion()
    {
        $value1 = rand(1, 99);
        $value2 = rand(1, 99);

        switch (rand(1, 3)) {
            case 1:
                $this->currentQuestion = $value1 . ' + ' . $value2;
                $this->correctAnswer = $value1 + $value2;
                break;
            case 2:
                $this->currentQuestion = $value1 . ' - ' . $value2;
                $this->correctAnswer = $value1 - $value2;
                break;
            default:
            case 3:
                $this->currentQuestion = $value1 . ' * ' . $value2;
                $this->correctAnswer = $value1 * $value2;
                break;
        }
    }
}
