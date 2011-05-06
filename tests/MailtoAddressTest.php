<?php

class MailtoAddressTest extends PHPUnit_Framework_TestCase
{
    public function testShowAMailSubjectAndSenderAddressWithAMailtoLink()
    {
        $address = new MailtoAddress('isaac@example.com');
        $expected = "<a href=\"mailto:isaac@example.com\">isaac@example.com</a>";
        $this->assertEquals($expected, $address->__toString());
    }
}
