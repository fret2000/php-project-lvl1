<?php

function generatePrimeQuestion(): array
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
    if ($currentQuestion == 1) {
        $correctAnswer = 'no';
    }
    return [$currentQuestion, $correctAnswer];
}

function gamePrime(): void
{
    $generalQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    start('Prime', $generalQuestion, 3);
}
