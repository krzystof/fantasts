<?php

namespace Tests\Fixture\ContainsTwoClasses;

class One
{
    public function oneMethod()
    {
        $this->isEmpty = true;
        return $this;
    }
}
