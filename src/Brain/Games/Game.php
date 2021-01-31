<?php

namespace Brain\Games;

use Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

class Game extends Cli
{
    protected $name;

    protected $rounds = 3;

    protected $generalQuestion = '';

    protected $currentQuestion = '';

    protected $correctAnswer = '';

    public function welcomeUser()
    {
        line("Welcome to the Brain Games!");

        $this->name = prompt("May I have your name?");

        line("Hello, " . $this->name);
    }

    public function start()
    {
        for ($currentRound = 1; $currentRound <= $this->rounds; $currentRound++) {
            $this->generateQuestion();
            if (!$this->askQuestion()) {
                line("Let's try again, " . $this->name . "!");
                return;
            }
        }

        line("Congratulations, " . $this->name . "!");
    }

    protected function generateQuestion()
    {
        throw new \Exception("Base class cannot be used");
    }

    protected function askQuestion()
    {
        line('Question: ' . $this->currentQuestion);
        $answer = prompt('Your answer');

        if ($answer == $this->correctAnswer) {
            line('Correct');
            return true;
        } else {
            line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $this->correctAnswer . "'.");
            return false;
        }
    }
}
