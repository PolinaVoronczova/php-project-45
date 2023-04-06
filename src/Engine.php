<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\even\evenAskAndGetCorrectAnswer;
use function BrainGames\Games\calc\calculatorAskAndGetCorrectAnswer;
use function BrainGames\Games\gcd\gcdAskAndGetCorrectAnswer;
use function BrainGames\Games\progression\progressionAskAndGetCorrectAnswer;
use function BrainGames\Games\prime\primeAskAndGetCorrectAnswer;

function startGame($gameName)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    switch ($gameName) {
        case "even":
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case "calculator":
            line('What is the result of the expression?');
            break;
        case "gcd":
            line('Find the greatest common divisor of given numbers.');
            break;
        case "progression":
            line('What number is missing in the progression?');
            break;
        case "prime":
            line('Answer "yes" if given number is prime. Otherwise answer "no".');
            break;
    }
    $score = 0;
    while ($score != 3) {
        $correctAnswer = "";
        $answers = [];
        switch ($gameName) {
            case "even":
                $correctAnswer = evenAskAndGetCorrectAnswer();
                break;
            case "calculator":
                $correctAnswer = calculatorAskAndGetCorrectAnswer();
                break;
            case "gcd":
                $correctAnswer = gcdAskAndGetCorrectAnswer();
                break;
            case "progression":
                $correctAnswer = progressionAskAndGetCorrectAnswer();
                break;
            case "prime":
                $correctAnswer = primeAskAndGetCorrectAnswer();
                break;
        }
        $userAnswer = prompt('Your answer');
        if ($userAnswer === strval($correctAnswer)) {
            $score++;
            line('Correct!');
        } else {
            line($userAnswer." is wrong answer ;(. Correct answer was " . $correctAnswer . ".");
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
