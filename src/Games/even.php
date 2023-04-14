<?php

namespace BrainGames\Games\even;

use function BrainGames\Engine\game;

function startGameEven()
{
    $questions = [];
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 0; $i < 3; $i++) {
        $randNum = rand(1, 100);
        $correctAnswer =  $randNum % 2 === 0 ? 'yes' : 'no';
        $question = 'Question: ' . $randNum;
        $questions[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    game(['description' => $description, 'questions' => $questions]);
}
