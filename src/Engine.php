<?php

use function cli\line;
use function cli\prompt;

function start(string $taskOfTheGame, array $questionsAndAnswers): void
{
    line("Welcome to the Brain Games!");

    $name = prompt("May I have your name?");

    line("Hello, " . $name);

    line($taskOfTheGame);

    foreach ($questionsAndAnswers as $key => $questionAnswer) {
        list($question, $answer) = $questionAnswer;

        if (!askQuestionAndCheckAnswer($question, $answer)) {
            line("Let's try again, " . $name . "!");
            return;
        }
    }

    line("Congratulations, " . $name . "!");
}

function askQuestionAndCheckAnswer(string $question, string $correctAnswer): bool
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
