<?php

namespace BrainGames\Games\progression;

use function BrainGames\Engine\startGame;

const DESCRIPTION_PROGRESSION_GAME = 'What number is missing in the progression?';
function startGameProgression()
{
    $questions = [];
    for ($i = 0; $i < COUNT_ROUNDS; $i++) {
        $lengthProgressionArray = rand(5, 10);
        $firstProgressionElement = rand(1, 20);
        $stepProgression = rand(1, 20);
        $hideElementIndex = rand(0, $lengthProgressionArray - 1);
        $progressionArray = [];
        $progressionArray[] = $firstProgressionElement;
        for ($j = 1; $j != $lengthProgressionArray; $j++) {
            $progressionArray[] = $progressionArray[$j - 1] + $stepProgression;
        }
        $progressionXArray = $progressionArray;
        $correctAnswer = $progressionXArray[$hideElementIndex];
        $progressionXArray[$hideElementIndex] = '..';
        $progressionX = implode(" ", $progressionXArray);
        $question = "Question: {$progressionX}";
        $questions[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    startGame(DESCRIPTION_PROGRESSION_GAME, $questions);
}
