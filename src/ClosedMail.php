<?php
class ClosedMail
{
    private $subject;
    private $address;

    public function __construct($subject, MailAddress $address)
    {
        $this->subject = $subject;
        $this->address = $address;
    }

    public function __toString()
    {
        return "<tr>\n"
             . "<td class=\"subject\">$this->subject</td>\n"
             . "<td class=\"address\">$this->address</td>\n"
             . "</tr>";
    }
}
