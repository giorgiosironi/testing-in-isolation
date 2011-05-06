<?php

class Order
{
    private $unitPrice = 0;
    private $quantity = 1;

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getState()
    {
        return array(
            'unitPrice' => $this->unitPrice,
            'quantity' => $this->quantity
        );
    }
}
