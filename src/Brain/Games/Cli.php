<?php

namespace Brain\Games;

use function cli\line;
use function cli\prompt;

class Cli
{
    protected $name;

    public function welcomeUser()
    {
        line("Welcome to the Brain Games!");

        $this->name = prompt("May I have your name?");

        line("Oh! Hi, " . $this->name);
    }
}
