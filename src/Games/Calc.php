<?php

function calculate(int $value1, int $value2, string $action): int
{
    if ($action == '+') {
        return $value1 + $value2;
    } elseif ($action == '-') {
        return $value1 - $value2;
    } elseif ($action == '*') {
        return $value1 * $value2;
    }
    return 0;
}


function generateCalcQuestion(): array
{
    $actions = [
        '+',
        '-',
        '*'
    ];
    $value1 = rand(1, 99);
    $value2 = rand(1, 99);

    $currentAction = $actions[array_rand($actions)];
    $currentQuestion = $value1 . ' ' . $currentAction . ' ' . $value2;

    $correctAnswer = calculate($value1, $value2, $currentAction);

    return [$currentQuestion, $correctAnswer];
}

function gameCalc(int $roundCount): void
{
    $taskOfTheGame = 'What is the result of the expression?';

    $questionAndAnswers = [];

    for ($i = 1; $i <= $roundCount; $i++) {
        $questionAndAnswers[] = generateCalcQuestion();
    }

    start($taskOfTheGame, $questionAndAnswers);
}
