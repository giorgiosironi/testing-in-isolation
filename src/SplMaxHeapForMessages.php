<?php

class SplMaxHeapForMessages extends SplMaxHeap
{
    public function __construct(array $messages)
    {
        foreach ($messages as $message) {
            $this->insert($message);
        }
    }

    public function compare($first, $second)
    {
        return $first->compare($second);
    }
}
