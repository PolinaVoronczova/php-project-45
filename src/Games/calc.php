<?php

namespace BrainGames\Games\calc;

use function BrainGames\Engine\startGame;

const DESCRIPTION_CALC_GAME = 'What is the result of the expression?';

function startGameCalc()
{
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $randNum1 = rand(1, 100);
        $randNum2 = rand(1, 100);
        $operationArrray = ['+', '-', '*'];
        $inkOrDec = rand(0, 2);
        switch ($operationArrray[$inkOrDec]) {
            case '+':
                $question = "Question: {$randNum1} + {$randNum2}";
                $correctAnswer =  $randNum1 + $randNum2;
                break;
            case '-':
                $question = "Question: {$randNum1} - {$randNum2}";
                $correctAnswer =  $randNum1 - $randNum2;
                break;
            case '*':
                $question = "Question: {$randNum1} * {$randNum2}";
                $correctAnswer =  $randNum1 * $randNum2;
                break;
        }
        $questions[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    startGame(DESCRIPTION_CALC_GAME, $questions);
}
