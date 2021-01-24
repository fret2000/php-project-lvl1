<?php
namespace Brain\Games;

use function cli\line;
use function cli\prompt;


class Cli {
	public static function welcomeUser() {
		line("Welcome to the Brain Games!");

		$name = prompt("What is your name?: ");

		line("Oh! Hi, " . $name);
	}
}
