<?php

function findGcd(int $value1, int $value2): int
{
    if ($value1 == $value2) {
        return $value1;
    }

    for ($i = round(max($value1, $value2) / 2); $i >= 1; $i--) {
        if ($value1 % $i == 0 && $value2 % $i == 0) {
            return intval($i);
        }
    }

    return 1;
}

function generateGcdQuestion(): array
{
    $value1 = rand(3, 99);
    $value2 = rand(6, 99);
    $correctAnswer = '';

    $currentQuestion = $value1 . ' ' . $value2;
    $correctAnswer = findGcd($value1, $value2);

    return [$currentQuestion, $correctAnswer];
}

function gameGcd(int $roundCount): void
{
    $taskOfTheGame = 'Find the greatest common divisor of given numbers.';

    $questionsAndAnswers = [];

    for ($i = 1; $i <= $roundCount; $i++) {
        $questionsAndAnswers[] = generateGcdQuestion();
    }

    start($taskOfTheGame, $questionsAndAnswers);
}
