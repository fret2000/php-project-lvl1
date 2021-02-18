<?php

function generateEvenQuestion(): array
{
    $value = rand(1, 99);

    $currentQuestion = $value;
    $correctAnswer = 'yes';

    if ($value % 2 == 1) {
        $correctAnswer = 'no';
    }

    return [$currentQuestion, $correctAnswer];
}

function gameEven(int $roundCount): void
{
    $generalQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';

    $questionAndAnswers = [];

    for ($i = 1; $i <= $roundCount; $i++) {
        $questionAndAnswers[] = generateEvenQuestion();
    }

    start($generalQuestion, $questionAndAnswers);
}
