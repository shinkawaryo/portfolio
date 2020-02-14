<?php
    require_once 'class/orders.php';
    $order = new Orders();

    require_once 'userAction.php';


    if(isset($_POST['order'])){
        $order_menu = $_POST['order_menu'];
        $account_id = $_SESSION['login_id'];
        $order_quantity = $_POST['order_quantity'];
        
        // echo 
        // $order_menu."<br>".
        // $order_quantity."<br>".
        // $account_id."<br>".
        // $date;
        $orderMenu = $order->addOrder($order_menu,$account_id,$order_quantity);


    }
    
    if(isset($_POST['spec_order'])){
        $spec_order_menu = $_POST['spec_order_menu'];
        $account_id = $_SESSION['login_id'];
        $spec_order_quantity = $_POST['spec_order_quantity'];
        $date = date('Y/m/d H:i:s');

        // echo 
        // $spec_order_menu."<br>".
        // $spec_order_quantity."<br>".
        // $account_id."<br>".
        // $date;
        $specOrderMenu = $order->addSpecOrder($spec_order_menu,$account_id,$spec_order_quantity,$date);
    }elseif(isset($_POST['confirm'])){
      header("Location: UI/dashboard.php");
    }
?>