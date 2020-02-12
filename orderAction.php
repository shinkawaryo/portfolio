<?php
    require_once 'class/orders.php';
    $order = new orders();

    if(isset($_POST['order'])){
      
       
        $order_amount = $_POST['order_amount'];


        $order = $order->addOrder($order_amount);
    }
?>