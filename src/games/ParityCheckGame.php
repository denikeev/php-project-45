<?php

namespace Brain\Games\Games\ParityCheckGame;

use function cli\line;
use function cli\prompt;

function startGame()
{
    $isEven = fn($number) => $number % 2 === 0;
    $numberOfCorrectAnswers = 3;

    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < $numberOfCorrectAnswers; $i += 1) {
        $randomNumber = rand(0, 100);
        line("Question: {$randomNumber}");
        $correctAnswer = $isEven($randomNumber) ? 'yes' : 'no';
        $answer = prompt('Your answer');

        if ($correctAnswer !== $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$name}!");
            return;
        }

        line('Correct!');
    }

    line("Congratulations, {$name}!");
}
