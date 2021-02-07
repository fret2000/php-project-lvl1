<?php

function generateCalcQuestion(): array
{
    $value1 = rand(1, 99);
    $value2 = rand(1, 99);

    switch (rand(1, 3)) {
        case 1:
            $currentQuestion = $value1 . ' + ' . $value2;
            $correctAnswer = $value1 + $value2;
            break;
        case 2:
            $currentQuestion = $value1 . ' - ' . $value2;
            $correctAnswer = $value1 - $value2;
            break;
        default:
        case 3:
            $currentQuestion = $value1 . ' * ' . $value2;
            $correctAnswer = $value1 * $value2;
            break;
    }
    return [$currentQuestion, $correctAnswer];
}

function gameCalc(): void
{
    $generalQuestion = 'What is the result of the expression?';

    start('Calc', $generalQuestion, 3);
}
