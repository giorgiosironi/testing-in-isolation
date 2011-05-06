<?php

class MessageTest extends PHPUnit_Framework_TestCase
{
    public function testMessagesAreComparableByDate()
    {
        $oldest = new Message(null, '2010-01-01');
        $newest = new Message(null, '2011-05-01');
        $this->assertEquals(1, $newest->compare($oldest));
        $this->assertEquals(-1, $oldest->compare($newest));
    }
}
