<?php
namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
function startGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    return $name;
}
function question($questionValue)
{
    line('Question:'.$questionValue);
    $answer = prompt('Your answer');
    return [$answer,$questionValue];
}
function checkAnswer($userAnswer,$correctAnswer)
{
    if ($userAnswer === $correctAnswer ) {
        return 'Correct!';
    } else {
        return($userAnswer." is wrong answer ;(. Correct answer was ".$correctAnswer.".");
    }
}
function checkGameResult($score)
{
    if ($score === 3) {
        return('Congratulations, ');
    } else {
        return("Let's try again, ");
    }
}
