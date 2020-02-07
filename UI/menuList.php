<?php
    include '../menuAction.php';
    include '../categoryAction.php';
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
</head>
<body>
    
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-8">
            <table class="table table-hover">
                <thead class="thead thead-dark text-uppercase">
                    <th>#</th>
                    <th>Menu Name</th>
                    <th>Menu Price</th>
                    <th>Menu Category</th>
                    <th>Menu picture</th>
                    <th>Menu Amount</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                         $menuList = $menu->displaymenu();

                         foreach($menuList as $menu){
                             $menu_id = $menu['menu_id'];
                        echo "
                            <tr>
                                <td>".$menu['menu_id']."</td>
                                <td>".$menu['menu_name']."</td>
                                <td>".$menu['menu_price']." </td>
                                <td>".$menu['category_name']."</td>
                                <td><img src='../upload/".$menu['menu_picture']."' class='img-fluid' alt='".$menu['menu_picture']."
                                '></td>
                                <td>".$menu['menu_amount']."</td>

                                <td><a href='editMenu.php?menu_id=$menu_id' role='button' class='btn btn-outline-danger'>Edit</a></td>
                                
                                <td><a href='deleteMenu.php?menu_id=$menu_id' role='button' class='btn btn-outline-danger'>Delete Menu</a></td>
                            </tr> 
                        ";
                         }
                    ?>
                    
                </tbody>
            </table>
            </div>
           
 
    
</body>
</html>