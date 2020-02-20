<?php
    include '../categoryAction.php';
    include '../menuAction.php';
    include '../orderAction.php';
    include '../billAction.php';
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
                    <th>subtotal</th>
                </thead>
                <tbody>
                    <?php
                         $billList = $bill->displaybill();
                        
                         if($billList){
                             foreach($billList as $bill){
                                  
                             echo "
                             <form action='../billAction.php' method='post'>
                                 <tr>
                                     <td>".$bill['menu_name']."</td>
                                     <td>".$bill['menu_price']."<input type='hidden' class='form-control' name='menu_price[]' value='".$bill['menu_price']."'></td>
                                     <td>".$bill['order_quantity']."<input type='hidden' class='form-control' name='order_quantity[]' value='".$bill['order_quantity']."'></td>
                                     <td>".$bill['order_quantity'] * $bill['menu_price']."<input type='hidden' class='form-control' name='subtotal[]' value='".$bill['order_quantity'] * $bill['menu_price']."'></td>
                                 </tr>
                                    
                                  
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
            <input type='submit' value='Confirm' name='billConfirm' class='form-control bg-danger text-white mt-2' style='font-size: 15px;'>
            <?php
                echo "</form>";
            ?>
        </div>
            
           
 
    
</body>
</html>