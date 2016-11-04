<?php

namespace Fantasts;

class EmptyDirReport
{
    public $name;

    public function __construct($dir)
    {
        $this->name = $dir;
    }

    public function __get($stat)
    {
        return 0;
    }
}
