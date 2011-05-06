<?php

class NewMessageLinkAddressTest extends PHPUnit_Framework_TestCase
{
    public function testShowAMailSubjectAndSenderAddressWithAnInApplicationLink()
    {
        $address = new NewMessageLinkAddress('isaac@example.com');
        $expected = "<a href=\"/new-mail?to=isaac@example.com\">isaac@example.com</a>";
        $this->assertEquals($expected, $address->__toString());
    }
}
