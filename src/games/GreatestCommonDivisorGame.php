<?php

namespace Brain\Games\Games\GreatestCommonDivisorGame;

use function Brain\Games\Engine\startGame;

function getGreatestDivisorGame(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }

    return getGreatestDivisorGame($b, $a % $b);
}


function getGameData(): array
{
    $firstNumber = rand(0, 50);
    $secondNumber = rand(0, 50);
    $question = "{$firstNumber} {$secondNumber}";
    $result = getGreatestDivisorGame($firstNumber, $secondNumber);
    $answer = "{$result}";

    return [$question, $answer];
}

function runGame()
{
    $exersice = 'Find the greatest common divisor of given numbers.';
    startGame($exersice, fn() => getGameData());
}
