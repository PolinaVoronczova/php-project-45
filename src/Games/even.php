<?php
namespace BrainGames\Games\even;
use function cli\line;
function evenAskAndGetCorrectAnswer()
{
    $randNum = rand(1, 100);
    $correctAnswer =  $randNum % 2 === 0 ? 'yes' : 'no';
    line('Question: '.$randNum);
    return $correctAnswer;
}
