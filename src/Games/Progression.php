<?php

function generateProgressionQuestion(): array
{
    $startValue = rand(3, 10);
    $incValue = rand(2, 15);
    $missing = rand(3, 7);
    $total = rand(7, 15);

    $correctAnswer = $current = $startValue;
    $currentQuestion = '';
    for ($i = 1; $i <= $total; $i++) {
        if ($i == $missing) {
            $currentQuestion .= '.. ';
            $correctAnswer = $current;
        } else {
            $currentQuestion .= $current . ' ';
        }
        $current += $incValue;
    }
    return [$currentQuestion, $correctAnswer];
}

function gameProgression(): void
{

    $generalQuestion = 'What is the result of the expression?';

    $name = welcomeUser();

    start('Progression', $name, $generalQuestion, 3);
}
