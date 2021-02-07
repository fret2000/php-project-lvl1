<?php

function generateCalcQuestion(): array
{
    $actions = [
        'increase',
        'decrease',
        'multiply'
    ];
    $value1 = rand(1, 99);
    $value2 = rand(1, 99);

    switch ($actions[array_rand($actions)]) {
        case 'increase':
            $currentQuestion = $value1 . ' + ' . $value2;
            $correctAnswer = $value1 + $value2;
            break;
        case 'decrease':
            $currentQuestion = $value1 . ' - ' . $value2;
            $correctAnswer = $value1 - $value2;
            break;
        default:
        case 'multiply':
            $currentQuestion = $value1 . ' * ' . $value2;
            $correctAnswer = $value1 * $value2;
            break;
    }
    return [$currentQuestion, $correctAnswer];
}

function gameCalc(): void
{
    $generalQuestion = 'What is the result of the expression?';

    $maxRounds = 3;

    $questions = [];

    for ($i=1; $i<= $maxRounds; $i++) {
        $questions[] = generateCalcQuestion();
    }

    start($generalQuestion, $questions);
}
