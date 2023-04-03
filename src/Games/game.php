<?php
namespace BrainGames\Games\game;
use function cli\line;
use function cli\prompt;
function evenQuestionAndCorrectAnswer()
{
    $randNum = rand(1, 100);
    $correctAnswer =  $randNum % 2 === 0 ? 'yes' : 'no';
    line('Question:'.$randNum);
    return $correctAnswer;
}