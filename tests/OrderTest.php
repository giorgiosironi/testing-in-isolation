<?php

class OrderTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $connection = new PDO('sqlite::memory:');
        $connection->exec('CREATE TABLE Order (
                            id INTEGER PRIMARY KEY AUTOINCREMENT,
                            unitPrice INTEGER,
                            quantity INTEGER
                         )');
        $this->repository = new OrderRepository($connection);
    }

    public function testTheTotalPriceIsConsistent()
    {
        $order = new Order();
        $order->setQuantity(2)
              ->setUnitPrice(10);
        $repository->addOrder($order);
        $price = $repository->getOrderTotalPrice($order->id);
        $this->assertEquals(20, $price);
    }
}
