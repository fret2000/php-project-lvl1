<?php

function generateQuestion()
{
    $startValue = rand(3, 10);
    $incValue = rand(2, 15);
    $missing = rand(3, 7);
    $total = rand(7, 15);

    $current = $startValue;
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

function game()
{

    $generalQuestion = 'What is the result of the expression?';

    $name = welcomeUser();

    start($name, $generalQuestion, 3);
}
