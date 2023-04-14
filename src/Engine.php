<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function game(array $gameInfo)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $gameDiscription = $gameInfo['description'];
    $gameQuestion = $gameInfo['questions'];
    line($gameDiscription);
    $score = 0;
    for ($i = 0; $score != 3; $i++) {
        line($gameQuestion[$i]['question']);
        $correctAnswer = $gameQuestion[$i]['correctAnswer'];
        $userAnswer = prompt('Your answer');
        if ($userAnswer === strval($correctAnswer)) {
            $score++;
            line('Correct!');
        } else {
            line($userAnswer . " is wrong answer ;(. Correct answer was " . $correctAnswer . ".");
            $score = 0;
            break;
        }
    }
    if ($score === 3) {
        line('Congratulations, ' . $name . '!');
    } else {
        line("Let's try again, " . $name . '!');
    }
    return;
}
