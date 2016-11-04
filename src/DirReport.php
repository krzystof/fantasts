<?php

namespace Fantasts;

class DirReport
{
    protected $columns;

    protected function __construct($name, $stats)
    {
        $this->columns['name'] = $name;
        $this->columns['lines'] = $stats['loc'];
        $this->columns['loc'] = $stats['lloc'];
        $this->columns['classes'] = $stats['classes'];
        $this->columns['methods'] = $stats['methods'];
        $this->columns['methodsPerClass'] = round($stats['methods'] / $stats['classes']);
        $this->columns['locPerMethod'] = $stats['methodLlocAvg'];
    }

    public static function fromArray($name, $stats)
    {
        return new static($name, $stats);
    }

    public function __get($col)
    {
        return $this->columns[$col];
    }
}
