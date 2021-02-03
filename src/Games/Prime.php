<?php

function generateQuestion()
{
    $value = rand(1, 99);

    $currentQuestion = $value;
    $correctAnswer = 'yes';
    for ($i = 2; $i <= $value / 2; $i++) {
        if ($value % $i == 0) {
            $correctAnswer = 'no';
            break;
        }
    }
    return [$currentQuestion, $correctAnswer];
}

function game()
{
    $generalQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $name = welcomeUser();

    start($name, $generalQuestion, 3);
}
