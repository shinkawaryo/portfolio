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
                <thead class="thead thead-primary text-uppercase">
                    <th>Menu</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </thead>
                <tbody>
                    <?php
                         $orderList = $order->displaySpecOrder();

                         foreach($orderList as $order){
                             $order_id = $order['order_id'];
                        echo "
                            <tr>
                                <td>".$order['menu_name']."</td>
                                <td>".$order['menu_price']."</td>
                                <td>".$order['order_quantity']."</td>
                                
                            </tr> 
                        ";
                         }
                    ?>
                    
                </tbody>
            </table>
            </div>
           
 
    
</body>
</html>