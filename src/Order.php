<?php

class Order
{
    private $unitPrice = 0;
    private $quantity = 1;

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        $this->recalculateTotalPrice();
        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->recalculateTotalPrice();
        return $this;
    }

    private function recalculateTotalPrice()
    {
        $this->totalPrice = $this->unitPrice * $this->quantity;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function getState()
    {
        return array(
            'unitPrice' => $this->unitPrice,
            'quantity' => $this->quantity
        );
    }
}
