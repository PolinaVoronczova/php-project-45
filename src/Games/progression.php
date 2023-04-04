<?php
namespace BrainGames\Games\progression;
use function cli\line;
use function cli\prompt;
function progressionQuestionAndCorrectAnswer()
{
    $lenProgressionArray = rand(5, 10);
    $firstProgressionElement = rand(1, 20);
    $stepProgression = rand(1, 20);
    $hideElementIndex = rand(0, $lenProgressionArray - 1);
    $progressionArray[]= $firstProgressionElement;
    for ($i = 1; $i != $lenProgressionArray; $i++) {
        $progressionArray[] = $progressionArray[$i - 1] + $stepProgression;
    }
    $progressionXArray = $progressionArray;
    $correctAnswer = $progressionXArray[$hideElementIndex];
    $progressionXArray[$hideElementIndex] = '..';
    $progressionX = implode(" ", $progressionXArray);
    line("Question: {$progressionX}");
    return $correctAnswer;
}