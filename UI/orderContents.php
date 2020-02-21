<?php
    include '../categoryAction.php';
    include '../menuAction.php';
    include '../orderAction.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ee07aedf32.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <div class="container col-md-4">
        <div class="form-row">
            <div class="form-group col-md-12 mt-5 mb-0 ">
            <table class="table table-bordered">
                <thead class="thead thead-primary text-uppercase text-center">
                    <th>Menu</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Edit</th>
                </thead>
                <tbody>
                    <?php
                         $orderList = $order->displaySpecOrder();
                        
                         if($orderList){
                             foreach($orderList as $order){
                                  $order_id = $order['order_id'];
                                  $menu_id = $order['menu_id'];
                                  
                             echo "
                             <form action='../billAction.php' method='post'>
                                 <tr>
                                     <td>".$order['menu_name']."</td>
                                     <td>".$order['menu_price']."</td>
                                     <td>".$order['order_quantity']."</td>
                                     <td><a href='editOrder.php?order_id=$order_id' role='button' class='btn btn-outline-danger'>Edit</a></td>
                                 </tr>
                                 <input type='hidden' class='form-control' name='forBill_menu_id[]' value='".$menu_id."'>
                                 <input type='hidden' class='form-control' name='forBill_order_id[]' value='".$order_id."'>
                                
                                  
                             ";
                            }
                            
                         }else{
                            echo "
                                 <tr>
                                     <td colspan=4 class='text-center'>Please Order</td>
                                     
                                 </tr> 
                             "; 
                         }   
                            
                    ?>
                    
                </tbody>
            </table>
                        <?php
                            echo "
                                <div class='form-row'>
                                <div class='form-group col-md-12 mt-0 mx-auto'>
                                    <input type='submit' name='confirm' value='Confirm' class='form-control btn btn-lg btn-danger'>
                                </div>
                            </div>
                        </form>
                            "
                        ?>
            </div>
           
 
    
</body>
</html>