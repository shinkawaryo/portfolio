<?php
    include '../orderAction.php';
    include '../billAction.php';

    $order_id = $_GET['order_id'];

    $order->updateServeTime($order_id);
?>