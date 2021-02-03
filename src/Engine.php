<?php

use function cli\line;
use function cli\prompt;

function welcomeUser()
{
    line("Welcome to the Brain Games!");

    $name = prompt("May I have your name?");

    line("Hello, " . $name);

    return $name;
}

function start($game, $name, $generalQuestion, $maxRounds)
{
    line($generalQuestion);
    for ($currentRound = 1; $currentRound <= $maxRounds; $currentRound++) {
        $questionFunction = "generate{$game}Question";
        list($question, $answer) = $questionFunction();
        if (!askQuestion($question, $answer)) {
            line("Let's try again, " . $name . "!");
            return;
        }
    }

    line("Congratulations, " . $name . "!");
}

function askQuestion($question, $correctAnswer)
{
    line('Question: ' . $question);
    $answer = prompt('Your answer');

    if ($answer == $correctAnswer) {
        line('Correct');
        return true;
    } else {
        line("'" . $answer . "' is wrong answer ;(. Correct answer was '" . $correctAnswer . "'.");
        return false;
    }
}
