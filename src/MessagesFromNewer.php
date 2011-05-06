<?php

class MessagesFromNewer implements Messages
{
    private $mapHeap;

    public function __construct(array $messages)
    {
        $this->maxHeap = new SplMaxHeapForMessages($messages);
    }

    public function getNext()
    {
        return $this->maxHeap->extract();
    }
}

