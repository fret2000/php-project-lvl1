<?php

function generateQuestion()
{
    $value1 = rand(3, 99);
    $value2 = rand(6, 99);

    $currentQuestion = $value1 . ' ' . $value2;
    for ($i = round(max($value1, $value2) / 2); $i >= 1; $i--) {
        if ($value1 % $i == 0 && $value2 % $i == 0) {
            $correctAnswer = $i;
            break;
        }
    }
    return [$currentQuestion, $correctAnswer];
}
