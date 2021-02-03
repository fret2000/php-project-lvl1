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

function gameEven(): void
{
    $generalQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';

    $name = welcomeUser();

    start('Even', $name, $generalQuestion, 3);
}
