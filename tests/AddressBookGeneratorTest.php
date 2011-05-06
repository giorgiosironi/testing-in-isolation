<?php

class AddressBookGeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testExtractsTheAddressesOfTheFirstNMessages()
    {
        $generator = new AddressBookGenerator(2, array(
            new Message('1@example.com', null),
            new Message('2@example.com', null),
            new Message('3@example.com', null)
        ));
    }
}
