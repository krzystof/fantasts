<?php

namespace Tests;

use Fantasts\Analyzer;

class AnalyzerTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    function it_should_returns_a_report_with_zeros_for_an_unexisting_dir()
    {
        $stats = Analyzer::dir('tests/fixtures/not_exists')->contains('nothing');

        $this->assertEquals('nothing', $stats->name);
        $this->assertEquals(0, $stats->lines);
        $this->assertEquals(0, $stats->loc);
        $this->assertEquals(0, $stats->classes);
        $this->assertEquals(0, $stats->methods);
        $this->assertEquals(0, $stats->methodsPerClass);
        $this->assertEquals(0, $stats->locPerMethod);
    }

    /** @test */
    function it_should_returns_a_report_with_zeros_for_an_empty_dir()
    {
        $stats = Analyzer::dir('tests/fixtures/empty')->contains('nothing_again');

        $this->assertEquals('nothing_again', $stats->name);
        $this->assertEquals(0, $stats->lines);
        $this->assertEquals(0, $stats->loc);
        $this->assertEquals(0, $stats->classes);
        $this->assertEquals(0, $stats->methods);
        $this->assertEquals(0, $stats->methodsPerClass);
        $this->assertEquals(0, $stats->locPerMethod);
    }

    /** @test */
    function it_should_analyze_one_class_with_one_method()
    {
        $stats = Analyzer::dir('tests/fixtures/contains_one_class')->contains('A class');

        $this->assertEquals('A class', $stats->name);
        $this->assertEquals(12, $stats->lines);
        $this->assertEquals(3, $stats->loc);
        $this->assertEquals(1, $stats->classes);
        $this->assertEquals(1, $stats->methods);
        $this->assertEquals(1, $stats->methodsPerClass);
        $this->assertEquals(2, $stats->locPerMethod);
    }

    /** @test */
    function it_should_analyze_a_directory_with_two_classes()
    {
        $stats = Analyzer::dir('tests/fixtures/contains_two_classes')->contains('A few classes');

        $this->assertEquals('A few classes', $stats->name);
        $this->assertEquals(33, $stats->lines);
        $this->assertEquals(17, $stats->loc);
        $this->assertEquals(2, $stats->classes);
        $this->assertEquals(4, $stats->methods);
        $this->assertEquals(2, $stats->methodsPerClass);
        $this->assertEquals(4, $stats->locPerMethod);
    }
}
