<?php

namespace Brain\Games\Games\ParityCheckGame;

use function Brain\Games\Engine\startGame;

function getGameData()
{
    $isEven = fn($number) => $number % 2 === 0;
    $randomNumber = rand(0, 100);
    $answer = $isEven($randomNumber) ? 'yes' : 'no';

    return [$randomNumber, $answer];
}

function runGame()
{
    $exersice = 'Answer "yes" if the number is even, otherwise answer "no".';
    startGame($exersice, fn() => getGameData());
}
