<?php

namespace BrainGames\Cli;

use BrainGames\Cli;

function isEven($number)
{
    return $number % 2 === 0;
}

function brain_GameEven()
{

    \cli\line("Answer 'yes' if the number is even, otherwise answer 'no'.");


    $number = random_int(1, 100);
    $correctAnswer = isEven($number) ? 'yes' : 'no';

    \cli\line("Question: $number");
    $userAnswer = \cli\prompt("Your answer: ");
    return [$userAnswer, $correctAnswer];
}
