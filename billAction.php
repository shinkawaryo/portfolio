<?php
    require_once 'class/bills.php';
    $bill = new Bills();

    require_once 'userAction.php';
    require_once 'orderAction.php';

    if(isset($_POST['confirm'])){
        // $account_id = $_SESSION['login_id'];
        // $menu_id =  $_POST['forBill_menu_id'];
        // $order_id =  $_POST['forBill_order_id'];
        
        $orderAllList = $bill->addAdminOrder();

        // if($orderAllList){
        //     
        // }
    }

    if(isset($_POST['billConfirm'])){
        $subtotal = $_POST['subtotal'];
        $sum = 0;
        

        // print_r($subtotal);        
        $count = count($subtotal);
        
        for($i = 0; $i < $count; $i++){
            $sum += $subtotal[$i];
        }
        // header("Location: UI/billCalculator.php");
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            <title>Document</title>
            <script src='https://kit.fontawesome.com/ee07aedf32.js' crossorigin='anonymous'></script>
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' 
            integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
        </head>
        <body>
            
            <div class='container col-md-4'>
                <div class='form-row'>
                    <div class='form-group col-md-12 mt-5 mb-0 '>
                    <table class='table table-bordered'>
                        <thead class='thead thead-primary text-uppercase text-center'>
                            <th>Menu</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>subtotal</th>
                        </thead>
                        <tbody>";
                            
                                 $billList = $bill->displaybill();
                                
                                 if($billList){
                                     foreach($billList as $bill){

                              echo"          
                                        <tr>
                                            <td>".$bill['menu_name']."</td>
                                            <td>".$bill['menu_price']."<input type='hidden' class='form-control' name='menu_price[]' value='".$bill['menu_price']."'></td>
                                            <td>".$bill['order_quantity']."<input type='hidden' class='form-control' name='order_quantity[]' value='".$bill['order_quantity']."'></td>
                                            <td>".$bill['order_quantity'] * $bill['menu_price']."<input type='hidden' class='form-control' name='subtotal[]' value='".$bill['order_quantity'] * $bill['menu_price']."'></td>
                                        </tr>";
                                     }       
   
                                    
                                   }
                    echo "</tbody>
                </table>";
                echo "<h1 class='display-3'>Total Fee: ".$sum."</h1>";
                echo "
                </div>   
            </body>
        </html>";
        
    }


?>