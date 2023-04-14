<?php

namespace BrainGames\Games\gcd;

use function BrainGames\Engine\game;

function startGameGcd()
{
    $description = 'Find the greatest common divisor of given numbers.';
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $randNum1 = rand(1, 100);
        $randNum2 = rand(1, 100);
        $gcdArray = [1];
        if ($randNum1 > $randNum2) {
            $gcdSearchNum1 = $randNum2;
            $gcdSearchNum2 = $randNum1;
        } else {
            $gcdSearchNum1 = $randNum1;
            $gcdSearchNum2 = $randNum2;
        }
        for ($j = 1; $j <= $gcdSearchNum1; $j++) {
            if ($gcdSearchNum1 % $j === 0 && $gcdSearchNum2 % $j === 0) {
                $gcdArray[] = $j;
            }
        }
        $correctAnswer =  max($gcdArray);
        $question = "Question: {$randNum1} {$randNum2}";
        $questions[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    game(['description' => $description, 'questions' => $questions]);
}
