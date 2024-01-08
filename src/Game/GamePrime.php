<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brain_GamePrime()
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    $num = random_int(1, 1000);
    line("Question: " . $num);
    $correctAnswer = IsPrime($num);
    $userAnswer = prompt("your answer:");

    return [$userAnswer, $correctAnswer];
}

function IsPrime(int $n)
{
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return "no";
        }
    }
    return "yes";
}
