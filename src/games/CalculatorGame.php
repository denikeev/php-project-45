<?php

namespace Brain\Games\Games\CalculatorGame;

use function Brain\Games\Engine\startGame;

function getGameData(): array
{
    $operators = ['+', '-', '*'];
    $operator = $operators[rand(0, 2)];
    $firstOperand = rand(0, 25);
    $secondOperand = rand(0, 15);

    switch ($operator) {
        case '+':
            $result = $firstOperand + $secondOperand;
            break;
        case '-':
            $result = $firstOperand - $secondOperand;
            break;
        case '*':
            $result = $firstOperand * $secondOperand;
            break;
        default:
            $result = $firstOperand + $secondOperand;
    }

    $question = "{$firstOperand} {$operator} {$secondOperand}";
    $answer = "{$result}";

    return [$question, $answer];
}

function runGame()
{
    $exersice = 'What is the result of the expression?';
    startGame($exersice, fn() => getGameData());
}
