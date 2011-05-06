<?php

class ClosedMailTest extends PHPUnit_Framework_TestCase
{
    public function testShowAMailSubjectAndASenderAddress()
    {
        $stubAddress = $this->getMock('MailAddress');
        $stubAddress->expects($this->any())
                    ->method('__toString')
                    ->will($this->returnValue('dummyAddress'));
        $mail = new ClosedMail('Urgent', $stubAddress);
        $expected = "<tr>\n"
                  . "<td class=\"subject\">Urgent</td>\n"
                  . "<td class=\"address\">dummyAddress</td>\n"
                  . "</tr>";
        $this->assertEquals($expected, $mail->__toString());
    }
}
