<?php

class OrderTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $connection = new PDO('sqlite::memory:');
        $connection->exec('CREATE TABLE order_table (
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
        $this->repository->addOrder($order);
        $price = $this->repository->getOrderTotalPrice(1);
        $this->assertEquals(20, $price);
    }
}
