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
