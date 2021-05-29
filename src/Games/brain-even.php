<?php

namespace Brain\Games\Games\brain\even;

use Brain\Games\Engine;

const MAX_ATTEMPT = 3;
const TASK_TEXT = 'Answer "yes" if the number is even, otherwise answer "no".';

//form data for game
function task() {
    $dataOfTask = function () :array
    {
        $question = rand(1,100);
        $rightAnswer =  ($question % 2 === 0) ? "yes" : "no";
        return [$question, $rightAnswer];
    };
    Engine\gameEngine($dataOfTask, MAX_ATTEMPT, TASK_TEXT);
}


//process of the game

