<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_ROUNDS = 3;

function startGame(string $gameDiscription, array $gameQuestion)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameDiscription);
    for ($i = 0; $i != COUNT_ROUNDS; $i++) {
        line($gameQuestion[$i]['question']);
        $correctAnswer = $gameQuestion[$i]['correctAnswer'];
        $userAnswer = prompt('Your answer');
        if ($userAnswer !== strval($correctAnswer)) {
            line($userAnswer . " is wrong answer ;(. Correct answer was " . $correctAnswer . ".");
            line("Let's try again, " . $name . '!');
            return;
        }
        line('Correct!');
    }
    line('Congratulations, ' . $name . '!');
    return;
}
