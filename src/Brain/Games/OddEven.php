<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

use Brain\Games\Cli;

class OddEven extends Cli
{
	protected $currentNumber;

    public function start() {
    	line('Answer "yes" if the number is even, otherwise answer "no".');

    	$consecutiveAnswers = 0;

    	while (true) {
    		if ($result = $this->askQuestion()) {
    			$consecutiveAnswers++;
    			line('Correct');
    			if ($consecutiveAnswers >= 3) {
    				break;	
    			}
    		} else {
    			$consecutiveAnswers = 0;
    			line("Let's try again, " . $this->name . "!");
    		}
    	}
    	line("Congratulations, " . $this->name . "!");
    }

    protected function askQuestion() {
    	$this->currentNumber = rand(1,99);
    	
    	line('Question: ' . $this->currentNumber);
    	$answer = prompt('Your answer');
    	$correctAnswer = ($this->currentNumber%2 == 0)?"yes":"no";

    	if ($answer == 'yes' && $this->currentNumber%2 == 0) {
    		return true;
    	} elseif ($answer == 'no' && $this->currentNumber%2 == 1) {
    		return true;
    	} else {
    		line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $correctAnswer . "'.");
    		return false;
    	}
    }


}
