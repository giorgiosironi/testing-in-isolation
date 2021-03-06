<?php

class AddressBookGeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testExtractsTheAddressesOfTheFirstNMessages()
    {
        $generator = new AddressBookGenerator(2, new MessagesStub(array(
            new Message('1@example.com', null),
            new Message('2@example.com', null),
            new Message('3@example.com', null)
        )));
        $this->assertEquals(array(
            '1@example.com',
            '2@example.com'
        ), $generator->getAddresses());
    }

    public function testExtractsAddressesWithoutDuplicates()
    {
        $generator = new AddressBookGenerator(3, new MessagesStub(array(
            new Message('1@example.com', null),
            new Message('1@example.com', null),
            new Message('2@example.com', null),
            new Message('2@example.com', null),
            new Message('3@example.com', null)
        )));
        $this->assertEquals(array(
            '1@example.com',
            '2@example.com'
        ), $generator->getAddresses());
    }
}

class MessagesStub implements Messages
{
    public function __construct(array $messages)
    {
        $this->messages = $messages;
    }

    public function getNext()
    {
        list ($key, $value) = each($this->messages);
        return $value;
    }
}
