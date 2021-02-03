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
