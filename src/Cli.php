<?php

namespace Brain\Games\Cli;

function welcomeUser()
{
    line("Welcome to the Brain Games!");

    $name = prompt("May I have your name?");

    line("Hello, " . $name);

    return $name;
}
