<?php

namespace Brain\Games\Cli;

//  src/Cli.php
use function cli\line;
use function cli\prompt;

function cli()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
