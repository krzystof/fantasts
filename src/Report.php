<?php

namespace Fantasts;

class Report
{
    public static function from($stats)
    {
        return new static;
    }

    public function printTo($output)
    {
        $output->writeln('yay');
    }
}
