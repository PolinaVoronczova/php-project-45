<?php
namespace BrainGames\Games\gcd;
use function cli\line;
function gcdAskAndGetCorrectAnswer()
{
    $randNum1 = rand(1, 100);
    $randNum2 = rand(1, 100);
    $gcdArray = [1];
    if ($randNum1 > $randNum2) {
        $gcdSearchNum1 = $randNum2;
        $gcdSearchNum2 = $randNum1;
    } else {
        $gcdSearchNum1 = $randNum1;
        $gcdSearchNum2 = $randNum2;
    }
    for ($i = 1; $i < $gcdSearchNum1; $i++) {
        if ($gcdSearchNum1 % $i === 0 && $gcdSearchNum2 % $i === 0) {
            $gcdArray[] = $i;
        }
    }
    $correctAnswer =  max($gcdArray);
    line("Question: {$randNum1} {$randNum2}");
    return $correctAnswer;
}