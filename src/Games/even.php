<?php

namespace BrainGames\Games\even;

use function BrainGames\Engine\startGame;

const DESCRIPTION_EVEN_GAME = 'Answer "yes" if the number is even, otherwise answer "no".';

function startGameEven()
{
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
        $randNum = rand(1, 100);
        $correctAnswer =  $randNum % 2 === 0 ? 'yes' : 'no';
        $question = 'Question: ' . $randNum;
        $questions[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    startGame(DESCRIPTION_EVEN_GAME, $questions);
}
