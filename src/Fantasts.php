<?php

namespace Fantasts;

class Fantasts
{
    public static function analyze($directory)
    {
        if (! file_exists($directory)) {
            throw new \Exception(sprintf('The directory "%s" does not exists and thus cannot be analyzed, duh', $directory));
        }
    }
}
