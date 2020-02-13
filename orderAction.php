<?php
    require_once 'class/orders.php';
    include 'userAction.php';
    $order = new Orders();

    if(isset($_POST['order'])){
        $order_menu = $_POST['order_menu'];
        $account_id = $_SESSION['login_id'];
        // $order_menu = $_POST['order_menu'];
        $order_quantity = $_POST['order_quantity'];
        $date = date('Y/m/d H:i:s');
        
        // echo $order_menu."<br>".
        // $menu_price."<br>".
        // $order_quantity."<br>".
        // $account_id."<br>".
        // $date;
        $orderMenu = $order->addOrder($order_menu,$account_id,$order_quantity,$date);
    }
?>