<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brain_GameProgression()
{
    line("What number is missing in the progression?");
    $numStart = random_int(1, 10);
    $numStep = random_int(2, 10);
    $numLength = random_int(6, 12);
    $numHidePosition = random_int(2, $numLength - 1);
    $progression = "";
    $correctAnswer = "";

    for ($i = 0; $i < $numLength; $i++) {
        if ($i != $numHidePosition) {
            $progression .= $numStart . " ";
        } else {
            $progression .= ".. ";
            $correctAnswer = $numStart;
        }

        $numStart += $numStep;
    }
    line("Question: " . $progression);
    $userAnswer = prompt("your answer:");

    return [$userAnswer, $correctAnswer];
}