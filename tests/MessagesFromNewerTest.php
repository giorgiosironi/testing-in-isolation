<?php

class MessagesFromNewerTest extends PHPUnit_Framework_TestCase
{
    public function testReturnesNewerMessagesFirst()
    {
        $messages = new MessagesFromNewer(array(
            new Message('4@example.com', '2010-01-01'),
            new Message('1@example.com', '2011-05-01'),
            new Message('3@example.com', '2010-09-01'),
            new Message('2@example.com', '2011-01-01')
        ));
        $this->assertEquals('1@example.com', $messages->getNext()->getAddress());
        $this->assertEquals('2@example.com', $messages->getNext()->getAddress());
        $this->assertEquals('3@example.com', $messages->getNext()->getAddress());
        $this->assertEquals('4@example.com', $messages->getNext()->getAddress());
    }
}
