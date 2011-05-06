<?php

class ClosedMailTest extends PHPUnit_Framework_TestCase
{
    public function testShowAMailSubjectAndSenderAddressWithAMailtoLink()
    {
        $mail = new ClosedMail('Urgent', new MailtoAddress('isaac@example.com'));
        $expected = "<tr>\n"
                  . "<td class=\"subject\">Urgent</td>\n"
                  . "<td class=\"address\"><a href=\"mailto:isaac@example.com\">isaac@example.com</a></td>\n"
                  . "</tr>";
        $this->assertEquals($expected, $mail->__toString());
    }

    public function testShowAMailSubjectAndSenderAddressWithAnInApplicationLink()
    {
        $mail = new ClosedMail('Urgent', new NewMessageLinkAddress('isaac@example.com'));
        $expected = "<tr>\n"
                  . "<td class=\"subject\">Urgent</td>\n"
                  . "<td class=\"address\"><a href=\"/new-mail?to=isaac@example.com\">isaac@example.com</a></td>\n"
                  . "</tr>";
        $this->assertEquals($expected, $mail->__toString());
    }

    public function testShowAMailSubjectAndSenderAddressWithNoLink()
    {
        // $mail = new ClosedMail('Urgent', new PlainTextAddress('isaac@example.com'));
        $this->markTestIncomplete();
    }
}
