<?php

class AddressBookGenerator
{
    private $sample;
    private $messages;

    public function __construct($sample, Messages $messages)
    {
        $this->sample = $sample;
        $this->messages = $messages;
    }

    public function getAddresses()
    {
        $addresses = array();
        for ($i = 0; $i < $this->sample; $i++) {
            $message = $this->messages->getNext();
            $addresses[] = $message->getAddress();
        }
        return $addresses;
    }
}
