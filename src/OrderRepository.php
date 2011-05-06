<?php

class OrderRepository
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function addOrder(Order $order)
    {
        $state = $order->getState();
        $stmt = $this->connection->prepare('INSERT INTO order_table (unitPrice, quantity, totalPrice) VALUES(:unitPrice, :quantity, :totalPrice)');
        $stmt->bindValue('unitPrice', $state['unitPrice'], PDO::PARAM_INT);
        $stmt->bindValue('quantity', $state['quantity'], PDO::PARAM_INT);
        $stmt->bindValue('totalPrice', $state['totalPrice'], PDO::PARAM_INT);
        $stmt->execute();
    }

    public function getOrder($orderId)
    {
        $stmt = $this->connection->prepare('SELECT * FROM order_table WHERE id = ?');
        $stmt->bindValue(1, $orderId, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch();
        $order = new Order();
        $order->setState($row);
        return $order;
    }
}
