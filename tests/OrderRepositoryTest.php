<?php

class OrderRepositoryTest extends PHPUnit_Framework_TestCase
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

    public function testAddsAndRetrieveAnOrderFromTheDatabase()
    {
        $order = new Order();
        $order->setUnitPrice(100);
        $this->repository->addOrder($order);
        $order = $this->repository->getOrder(1);
        $this->assertEquals(100, $order->getUnitPrice());
    }
}
