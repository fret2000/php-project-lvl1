<?php

use function cli\line;
use function cli\prompt;

function start(string $generalQuestion, array $questions): void
{
    line("Welcome to the Brain Games!");

    $name = prompt("May I have your name?");

    line("Hello, " . $name);

    line($generalQuestion);

    foreach ($questions as $key => $questionAnswerPair) {
        list($question, $answer) = $questionAnswerPair;
        
        if (!askQuestion($question, $answer)) {
            line("Let's try again, " . $name . "!");
            return;
        }
    }

    line("Congratulations, " . $name . "!");
}

function askQuestion(string $question, string $correctAnswer): bool
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
