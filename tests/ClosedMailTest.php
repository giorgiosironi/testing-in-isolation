<?php

class ClosedMailTest extends PHPUnit_Framework_TestCase
{
    public function testShowAMailSubjectAndSenderAddress()
    {
        $mail = new ClosedMail('Urgent', 'isaac@example.com');
        $expected = "<tr>\n"
                  . "<td class=\"subject\">Urgent</td>\n"
                  . "<td class=\"address\">isaac@example.com</td>\n"
                  . "</tr>";
        $this->assertEquals($expected, $mail->__toString());
    }
}
