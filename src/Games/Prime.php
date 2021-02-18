<?php

function isPrime(int $number): bool
{
    if ($number == 1) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function generatePrimeQuestion(): array
{
    $value = rand(1, 99);

    $currentQuestion = $value;
    $correctAnswer = isPrime($value) ? 'yes' : 'no';

    return [$currentQuestion, $correctAnswer];
}

function gamePrime(int $roundCount): void
{
    $taskOfTheGame = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $questionsAndAnswers = [];

    for ($i = 1; $i <= $roundCount; $i++) {
        $questionsAndAnswers[] = generatePrimeQuestion();
    }

    start($taskOfTheGame, $questionsAndAnswers);
}
