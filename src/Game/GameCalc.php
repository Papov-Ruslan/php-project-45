<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function brain_GameCalc()
{
    $num1 = random_int(1, 100);
    $num2 = random_int(1, 100);
    $operands = ["+", "-", "*"];
    $operand = $operands[random_int(0, 2)];
    line("Question: " . $num1 . " " . $operand . " " . $num2);
    $userAnswer = prompt("your answer:");
    $correctAnswer = eval("return $num1 $operand $num2;");
    return [$userAnswer, $correctAnswer];
}
