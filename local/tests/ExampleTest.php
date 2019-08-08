<?php
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testOneIsOne()
    {
        $this->assertEquals(
            "1",
            "1"
        );
    }
}