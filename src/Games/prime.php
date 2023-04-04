<?php
namespace BrainGames\Games\prime;
use function cli\line;
use function cli\prompt;
function primeQuestionAndCorrectAnswer()
{
    $correctAnswer = 'yes';
    $randomNum = rand(1, 100);
    for ($i = 2; $i !== $randomNum; $i++) {
        if ($randomNum % $i === 0) {
            $correctAnswer = 'no';
        }
    }
    line('Question: '.$randomNum);
    return $correctAnswer;
}