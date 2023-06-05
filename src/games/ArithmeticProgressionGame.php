<?php

namespace Brain\Games\Games\ArithmeticProgressionGame;

use function Brain\Games\Engine\startGame;

function getGameData(): array
{
    $initialNumber = rand(0, 50);
    $progressionLength = rand(5, 10);
    $progressionStep = rand(2, 10);
    $progression = [$initialNumber];
    $missingIndex = rand(0, $progressionLength - 1);

    for ($i = 1, $number = $initialNumber; $i < $progressionLength; $i += 1) {
        $number += $progressionStep;
        $progression[$i] = $number;
    }

    $answer = "{$progression[$missingIndex]}";
    $progression[$missingIndex] = '..';
    $question = implode(' ', $progression);

    return [$question, $answer];
}

function runGame()
{
    $exersice = 'What number is missing in the progression?';
    startGame($exersice, fn() => getGameData());
}
