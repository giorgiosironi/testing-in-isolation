<?php

class AddressBookGeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testExtractsTheAddressesOfTheFirstNMessagesOrderedByDate()
    {
        $generator = new AddressBookGenerator(2, array(
            new Message('1@example.com', '2011-05-01 12:30'),
            new Message('2@example.com', '2011-05-02 16:00'),
            new Message('3@example.com', '2011-04-30 10:00')
        ));
    }
}
