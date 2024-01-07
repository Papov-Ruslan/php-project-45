<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function StartGame(string $gameName)
{
    line("Welcome to the Brain Games! \n");
    $name = prompt("May I have your name?");
    line("Hello $name");
    $correctAnswersCount = 0;
    $roundsCount = 3;
    require_once(__DIR__ . "/../src/Game/" . $gameName . ".php");
    while ($correctAnswersCount < $roundsCount) {
        [$userAnswer, $correctAnswer] = eval('return BrainGames\Cli\brain_' . $gameName . '();');

        if ($userAnswer == $correctAnswer) {
            \cli\line("Correct!\n");
            $correctAnswersCount++;
        } else {
            \cli\line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n");
            \cli\line("Let's try again, $name!\n");
            return;
        }
    }
    line("Congratulations!!!!, $name");
}
