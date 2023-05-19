<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function startGame($exersice, $getGameData)
{
    $numberOfCorrectAnswers = 3;

    line("Welcome to the Brain Games!");
    $name = prompt('May I have your name?', '', ' ');
    line("Hello, %s!", $name);
    line($exersice);

    for ($i = 0; $i < $numberOfCorrectAnswers; $i += 1) {
        [$question, $correctAnswer] = call_user_func($getGameData);
        line("Question: {$question}");
        $answer = prompt('Your answer');

        if ($correctAnswer !== $answer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$name}!");
            return;
        }

        line('Correct!');
    }

    line("Congratulations, {$name}!");
}
