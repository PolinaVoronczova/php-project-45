#!/usr/bin/env php
<?php

namespace BrainEven\game;

use function cli\line;
use function cli\prompt;

line('Welcome to the Brain Games!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');
$resultGame = evenGame();
line($resultGame.$name);


function evenGame()
{
    $score = 0;
    while ($score != 3) {
        $questionInfo = question();
        $userAnswer = $questionInfo[0];
        $randNum = $questionInfo[1];
        $resultCheackAnswer = checkAnswer($userAnswer, $randNum);
        if ($resultCheackAnswer === 'Correct!') {
            $score++;
            line(checkAnswer($userAnswer, $randNum));
        } else {
            line(checkAnswer($userAnswer, $randNum));
            $score = 0;
            break;
        }
    }
    if ($score === 3) {
        return('Congratulations, ');
    } else {
        return("Let's try again, ");
    }
}
function question()
{
    $randNum = rand(1, 100);
    line('Question:'.$randNum);
    $answer = prompt('Your answer');
    return [$answer,$randNum];
}
function checkAnswer($userAnswer, $numForCheack)
{
    $evenCheack = $numForCheack % 2 === 0 ? 'yes' : 'no';
    if ($userAnswer === $evenCheack ) {
        return 'Correct!';
    } else {
        return($userAnswer." is wrong answer ;(. Correct answer was ".$evenCheack.".");
    }
}
