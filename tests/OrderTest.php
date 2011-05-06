<?php

class OrderTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $connection = new PDO('sqlite::memory:');
        $connection->exec('CREATE TABLE order_table (
                            id INTEGER PRIMARY KEY AUTOINCREMENT,
                            unitPrice INTEGER,
                            quantity INTEGER,
                            totalPrice INTEGER
                         )');
        $this->repository = new OrderRepository($connection);
    }

    public function testTheTotalPriceIsConsistent()
    {
        $order = new Order();
        $order->setQuantity(2)
              ->setUnitPrice(10);
        $this->assertEquals(20, $order->getTotalPrice());
        $this->markTestIncomplete();
        /*
        $this->repository->addOrder($order);
        $price = $this->repository->getOrder(1);
        $this->assertEquals(20, $price);
        */
    }
}
