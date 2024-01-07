<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brain_GameGcd()
{
    line("Find the greatest common divisor of given numbers.");
    $num1 = random_int(1, 100);
    $num2 = random_int(1, 100);
    line("Question: " . $num1 . " " . $num2);
    $userAnswer = prompt("your answer:");
    $correctAnswer = getGcd($num1, $num2);
    return [$userAnswer, $correctAnswer];
}

function getGcd(int $num1, int $num2)
{
    if ($num1 % $num2 != 0) {
        return getGcd($num2, $num1 % $num2);
    } else {
        return abs($num2);
    }
}
