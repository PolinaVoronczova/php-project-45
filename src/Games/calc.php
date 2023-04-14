<?php

namespace BrainGames\Games\calc;

use function BrainGames\Engine\game;

function startGameCalc()
{
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $randNum1 = rand(1, 100);
        $randNum2 = rand(1, 100);
        $inkOrDec = rand(1, 3);
        $description = 'What is the result of the expression?';
        switch ($inkOrDec) {
            case 1:
                $question = "Question: {$randNum1} + {$randNum2}";
                $correctAnswer =  $randNum1 + $randNum2;
                break;
            case 2:
                $question = "Question: {$randNum1} - {$randNum2}";
                $correctAnswer =  $randNum1 - $randNum2;
                break;
            case 3:
                $question = "Question: {$randNum1} * {$randNum2}";
                $correctAnswer =  $randNum1 * $randNum2;
                break;
        }
        $questions[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    game(['description' => $description, 'questions' => $questions]);
}
