<?php
class NewMessageLinkAddress
{
    private $address;

    public function __construct($address)
    {
        $this->address = $address;
    }
    
    public function __toString()
    {
        return "<a href=\"/new-mail?to=$this->address\">$this->address</a>";
    }
}
