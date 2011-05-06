<?php
class MailtoAddress
{
    private $address;

    public function __construct($address)
    {
        $this->address = $address;
    }
    
    public function __toString()
    {
        return "<a href=\"mailto:$this->address\">$this->address</a>";
    }
}
