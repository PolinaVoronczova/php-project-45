<?php

namespace BrainGames\Games\calc;

use function cli\line;

function calculatorAskAndGetCorrectAnswer()
{
    $randNum1 = rand(1, 100);
    $randNum2 = rand(1, 100);
    $inkOrDec = rand(1, 3);
    switch ($inkOrDec) {
        case 1:
            line("Question: {$randNum1} + {$randNum2}");
            $correctAnswer =  $randNum1 + $randNum2;
            break;
        case 2:
            line("Question: {$randNum1} - {$randNum2}");
            $correctAnswer =  $randNum1 - $randNum2;
            break;
        case 3:
            line("Question: {$randNum1} * {$randNum2}");
            $correctAnswer =  $randNum1 * $randNum2;
            break;
    }
    return $correctAnswer;
}
