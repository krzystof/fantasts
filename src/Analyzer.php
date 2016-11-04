<?php

namespace Fantasts;

use SebastianBergmann\PHPLOC\Analyser;
use SebastianBergmann\FinderFacade\FinderFacade;

class Analyzer
{
    protected $dir;
    protected $name;

    public function __construct($dir)
    {
        $this->dir = $dir;
    }

    public static function dir($dir)
    {
        return new static($dir);
    }

    public function contains($name)
    {
        $this->name = $name;
        return $this->run();
    }

    private function run()
    {
        if (! file_exists($this->dir)) {
            return new EmptyDirReport($this->name);
        }

        $finder = new FinderFacade([$this->dir]);
        $files  = $finder->findFiles();

        if (empty($files)) {
            return new EmptyDirReport($this->name);
        }

        $analyser = new Analyser;

        $raw_stats = $analyser->countFiles($files, false);

        return DirReport::fromArray($this->name, $raw_stats);
    }
}
