<?php

function generateProgressionQuestion(): array
{
    $startValue = rand(3, 10);
    $diff = rand(2, 15);

    $minimumElements = 7;
    $maximumElements = 15;

    $total = rand($minimumElements, $maximumElements);
    $missingElementIndex = rand(1, $total);

    $correctAnswer = $startValue + $diff * ($missingElementIndex - 1);
    $currentQuestion = '';
    $current = $startValue;
    for ($i = 1; $i <= $total; $i++) {
        if ($i == $missingElementIndex) {
            $currentQuestion .= '.. ';
        } else {
            $currentQuestion .= $current . ' ';
        }
        $current += $diff;
    }
    return [$currentQuestion, $correctAnswer];
}

function gameProgression(int $roundCount): void
{

    $generalQuestion = 'What is the result of the expression?';

    $questionAndAnswers = [];

    for ($i = 1; $i <= $roundCount; $i++) {
        $questionAndAnswers[] = generateProgressionQuestion();
    }

    start($generalQuestion, $questionAndAnswers);
}
