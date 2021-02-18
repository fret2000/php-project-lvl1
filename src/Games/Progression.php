<?php

function generateProgression(int $start, int $diff, int $count): array
{
    $progression = [];
    $current = $start;
    for ($i = 1; $i <= $count; $i++) {
        $progression[] = $current;
        $current += $diff;
    }
    return $progression;
}

function generateProgressionQuestion(): array
{
    $startValue = rand(3, 10);
    $diff = rand(2, 15);

    $minimumElements = 7;
    $maximumElements = 15;

    $total = rand($minimumElements, $maximumElements);
    $missingElementIndex = rand(1, $total);

    $progression = generateProgression($startValue, $diff, $total);
    $correctAnswer = $progression[$missingElementIndex - 1];

    $progression[$missingElementIndex - 1] = '..';

    $currentQuestion = implode(' ', $progression);

    return [$currentQuestion, $correctAnswer];
}

function gameProgression(int $roundCount): void
{

    $taskOfTheGame = 'What is the result of the expression?';

    $questionAndAnswers = [];

    for ($i = 1; $i <= $roundCount; $i++) {
        $questionAndAnswers[] = generateProgressionQuestion();
    }

    start($taskOfTheGame, $questionAndAnswers);
}
