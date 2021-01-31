<?php

namespace Brain\Games;

use Brain\Games\Game;

use function cli\line;
use function cli\prompt;

class Prime extends Game
{
    protected $generalQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    protected function generateQuestion()
    {
        $value = rand(1, 99);

        $this->currentQuestion = $value;
        $this->correctAnswer = 'yes';
        for ($i = 2; $i <= $value / 2; $i++) {
            if ($value % $i == 0) {
                $this->correctAnswer = 'no';
                break;
            }
        }
    }
}
