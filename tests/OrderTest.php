<?php

class OrderTest extends PHPUnit_Framework_TestCase
{
    public function testTheTotalPriceIsConsistent()
    {
        $order = new Order();
        $order->setQuantity(2)
              ->setUnitPrice(10);
        $this->assertEquals(20, $order->getTotalPrice());
    }
}
