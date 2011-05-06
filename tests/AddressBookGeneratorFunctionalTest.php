<?php

class AddressBookGeneratorFunctionalTest extends PHPUnit_Framework_TestCase
{
    public function testExtractsAUniqueCopyOfTheAddressesOfTheFirstNMessagesOrderedByDescendingDate()
    {
        $generator = new AddressBookGenerator(3, new MessagesFromNewer(array(
            new Message('4@example.com', '2010-01-01'),
            new Message('1@example.com', '2011-05-01'),
            new Message('2@example.com', '2011-01-01'),
            new Message('2@example.com', '2010-09-01')
        )));
        $this->assertEquals(array(
            '1@example.com',
            '2@example.com'
        ), $generator->getAddresses());
    }
}
