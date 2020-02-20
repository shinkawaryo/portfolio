<?php
    include 'adminheader.php';
?>

<div class="container-fluid m-0 p-0">            
                    <h1 class="display-1 bg-secondary text-white"><i class="fas fa-user-cog"></i>Menu</h1>              
    </div>
    <div class="container">
                <div class="form-row mx-auto mt-5">
                    <div class="form-group col-md-4">
                        <a href="addMenu.php"><p class="form-control text-center bg-primary text-white"><i class="fas fa-plus-circle"></i>Add Menu</p></a>
                    </div>
                    <div class="form-group col-md-4">
                        <a href="addCategory.php"><p class="form-control text-center bg-success text-white"><i class="fas fa-folder-plus"></i>Add Category</p></a>
                    </div>
                    <div class="form-group col-md-4">
                        <a href="register.php"><p class="form-control text-center bg-warning text-white"><i class="fas fa-user-plus"></i>Add User</p></a>
                    </div>
                </div>
    </div>  
    
    <div class="container">
        <div class="form-row d-flex justify-content-center">
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