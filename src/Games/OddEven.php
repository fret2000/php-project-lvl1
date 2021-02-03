<?php

function generateQuestion()
{
    $value = rand(1, 99);

    $currentQuestion = $value;
    $correctAnswer = 'yes';

    if ($value % 2 == 1) {
        $correctAnswer = 'no';
        break;
    }

    return [$currentQuestion, $correctAnswer];
}

function game()
{
    $generalQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';

    $name = welcomeUser();

    start($name, $generalQuestion, 3);
}
