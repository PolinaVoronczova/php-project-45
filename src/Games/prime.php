<?php

namespace BrainGames\Games\prime;

use function BrainGames\Engine\game;

function startGamePrime()
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $correctAnswer = 'yes';
        $randomNum = rand(1, 100);
        for ($j = 2; $j !== $randomNum; $j++) {
            if ($randomNum % $j === 0) {
                $correctAnswer = 'no';
            }
        }
        $question = "Question: " . $randomNum;
        $questions[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    game(['description' => $description, 'questions' => $questions]);
}
