<?php

function isEven(int $value): bool
{
    return !!($value % 2 == 0);
}

function generateEvenQuestion(): array
{
    $value = rand(1, 99);

    $currentQuestion = $value;
    $correctAnswer = isEven($value) ? 'yes' : 'no';

    return [$currentQuestion, $correctAnswer];
}

function gameEven(int $roundCount): void
{
    $taskOfTheGame = 'Answer "yes" if the number is even, otherwise answer "no".';

    $questionAndAnswers = [];

    for ($i = 1; $i <= $roundCount; $i++) {
        $questionAndAnswers[] = generateEvenQuestion();
    }

    start($taskOfTheGame, $questionAndAnswers);
}
