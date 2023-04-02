<?php
namespace BrainGames\game;

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\startGame;
use function BrainGames\Engine\question;
use function BrainGames\Engine\checkAnswer;
use function BrainGames\Engine\checkGameResult;

$userName = startGame();
$resultGame = evenGame();
line($resultGame.$userName);
function evenGame()
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $score = 0;
    while ($score != 3) {
        $randNum = rand(1, 100);
        $questionInfo = question($randNum);
        $userAnswer = $questionInfo[0];
        $randNum = $questionInfo[1];
        $isEven = evenCheack($randNum);
        $resultCheackAnswer = checkAnswer($userAnswer, $isEven);
        if ($resultCheackAnswer === 'Correct!') {
            $score++;
            line($resultCheackAnswer);
        } else {
            line($resultCheackAnswer);
            $score = 0;
            break;
        }
    }
    return checkGameResult($score);
}
function evenCheack($numForCheack)
{
    $result = $numForCheack % 2 === 0 ? 'yes' : 'no';
    return $result;
}