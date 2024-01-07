<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function StartGame(array $finalAssocArray, string $name, string $task)
{
    line($task);
    foreach ($finalAssocArray as $key => $value) {
        $answer = prompt("Question: $key\nYour answer");
        if ($answer != $value) {
            line("'$answer' is wrong answer ;(. Correct answer was '$value'. \nLet's try again, $name!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, $name!");
}

//
//namespace BrainGames\Cli;
//
//use function cli\line;
//use function cli\prompt;
//
//function StartGame(string $gameName)
//{
//    line("Welcome to the Brain Games!");
//    $name = prompt("May I have your name?");
//    line("Hello $name");
//    $correctAnswersCount = 0;
//    $roundsCount = 3;
//    require_once(__DIR__ . "/../src/Game/" . $gameName . ".php");
//    while ($correctAnswersCount < $roundsCount) {
//        [$userAnswer, $correctAnswer] = eval('return BrainGames\Cli\brain_' . $gameName . '();');
//
//        if ($userAnswer == $correctAnswer) {
//            \cli\line("Correct!");
//            $correctAnswersCount++;
//        } else {
//            \cli\line("'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
//            \cli\line("Let's try again, $name!");
//            return;
//        }
//    }
//    line("Congratulations!!!!, $name");
//}
