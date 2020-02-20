<?php
    require_once 'class/orders.php';
    $order = new Orders();

    require_once 'userAction.php';
    require_once 'billAction.php';



    if(isset($_POST['order'])){
        $order_menu = $_POST['order_menu'];
        $account_id = $_SESSION['login_id'];
        $order_quantity = $_POST['order_quantity'];
        
        // echo $account_id;
        
        $orderMenu = $order->addOrder($order_menu,$account_id,$order_quantity);


    }
    
    if(isset($_POST['spec_order'])){
        $spec_order_menu = $_POST['spec_order_menu'];
        $account_id = $_SESSION['login_id'];
        $spec_order_quantity = $_POST['spec_order_quantity'];
        
        // echo $account_id;
       
        $specOrderMenu = $order->addSpecOrder($spec_order_menu,$account_id,$spec_order_quantity);

    }

    if(isset($_POST['change_quantity'])){
        $new_quantity = $_POST['new_quantity'];
        $order_id = $_POST['order_id'];


        $changeQuantity = $order->changeQuantity($new_quantity,$order_id);
    }
    
    

?>