<?php

namespace Bassoon;


use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    protected $subject;

    protected function setUp(): void
    {
        $this->subject = new Index();
    }

    public function testIndex()
    {
        $this->assertEquals($this->subject->index(), 'hello world');
    }
}
