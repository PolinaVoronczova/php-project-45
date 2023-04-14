<?php

namespace BrainGames\Games\progression;

use function BrainGames\Engine\game;

function startGameProgression()
{
    $description = 'What number is missing in the progression?';
    $questions = [];
    for ($i = 0; $i < 3; $i++) {
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
    game(['description' => $description, 'questions' => $questions]);
}
