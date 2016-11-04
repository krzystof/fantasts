<?php

namespace Tests\Fixture\ContainsTwoClasses;

class Two
{
    public function oneMethod()
    {
        $this->isEmpty = true;
        return $this;
    }

    public function twoMethod()
    {
        $this->isEmpty = true;
        $this->isEmpty = true;
        $this->isEmpty = true;
        $this->isEmpty = true;
        $this->isEmpty = true;
        $this->isEmpty = true;
        return $this;
    }

    public function threeMethod()
    {
        $this->isEmpty = true;
        $this->isEmpty = true;
        $this->isEmpty = true;
        return $this;
    }
}
