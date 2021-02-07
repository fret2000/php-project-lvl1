<?php

function isPrime(int $number): bool {
    if ($number == 1) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
            break;
        }
    }
    
    return true;
}

function generatePrimeQuestion(): array
{
    $value = rand(1, 99);

    $currentQuestion = $value;
    if  (isPrime($value))  {
        $correctAnswer = 'yes';
    } else {
        $correctAnswer = 'no';
    }
    
    return [$currentQuestion, $correctAnswer];
}

function gamePrime(): void
{
    $generalQuestion = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $maxRounds = 3;

    $questions = [];

    for ($i=1; $i<= $maxRounds; $i++) {
        $questions[] = generatePrimeQuestion();
    }

    start($generalQuestion, $questions);
}
