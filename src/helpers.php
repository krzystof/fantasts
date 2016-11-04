<?php

function info($output)
{
    output('<info>'.$output.'</info>');
}

function warning($output)
{
    output('<fg=red>'.$output.'</>');
}

function output($output)
{
    (new Symfony\Component\Console\Output\ConsoleOutput)->writeln($output);
}
