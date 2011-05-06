<?php

class Message
{
    private $address;
    private $date;

    public function __construct($address, $date)
    {
        $this->address = $address;
        $this->date = $date;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
