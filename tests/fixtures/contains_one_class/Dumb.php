<?php

namespace Tests\Fixture\ContainsOneClass;

class Dumb
{
    public function oneMethod()
    {
        $this->isEmpty = true;
        return $this;
    }
}
