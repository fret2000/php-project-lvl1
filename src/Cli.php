<?php

use function cli\line;
use function cli\prompt;

function welcome(): string
{
    line("Welcome to the Brain Games!");

    $name = prompt("May I have your name?");

    line("Hello, " . $name);

    return $name;
}
