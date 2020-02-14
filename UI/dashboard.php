<?php
    include '../userAction.php';
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
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <form action="" method="post">
        <nav class="navbar nabver-expand-lg navbar-dark bg-dark text-white m-0 p-0">
                <div class="form-row m-0 p-0">
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Dashboard</button> -->
                    <a href="dashboard.php" class="navbar-brand p-0">Dashboard</a>
                    </div>
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Posts</button> -->
                    <a href="menuList.php" class="navbar-brand p-0">Menu</a>
                    </div>
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Categories</button> -->
                    <a href="categoryList.php" class="navbar-brand p-0">Categories</a>
                    </div>
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Users</button> -->
                    <a href="userList.php" class="navbar-brand p-0">Users</a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
    <div class="container-fluid m-0 p-0">            
                    <h1 class="display-1 bg-secondary text-white"><i class="fas fa-user-cog"></i>Dashboard</h1>              
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
        <div class="form-row">
            <div class="form-group col-md-8">
            <table class="table table-hover">
                <thead class="thead thead-dark text-uppercase">
                    <th>Table</th>
                    <th>Menu</th>
                    <th>Quantity</th>
                    <th>Order Time</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                        $orderAllList = $order->displayAllOrder();

                        foreach($orderAllList as $allOrder){
                           
                            echo "
                            <tr>
                            <td>".$allOrder['username']."</td>
                            <td>".$allOrder['menu_name']."</td>
                            <td>".$allOrder['order_quantity']."</td>
                            <td>".$allOrder['order_time']."</td>
                            
                        </tr>   
                            ";
                        }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="form-group col-md-4">
            <div class="card mx-auto bg-primary text-white text-center mb-5" >
                <div class="card-header border-0">
                    <h4>Menu</h4>
                </div>
                <div class="card-body border-0">
                <i class="fas fa-pencil-alt text-white fa-2x"></i>
                </div>
                <div class="card-footer border-0">
                <a href="blogPost.php" class="btn btn-primary border-white">VIEW</a>
                </div>
            </div>

            <div class="card mx-auto bg-success text-white text-center mb-5" >
                <div class="card-header border-0">
                    <h4>Category</h4>
                </div>
                <div class="card-body border-0">
                <i class="far fa-folder-open fa-2x"></i>
                </div>
                <div class="card-footer border-0">
                <a href="blogCategory.php" class="btn btn-success border-white">VIEW</a>
                </div>
            </div>

            <div class="card mx-auto bg-warning text-white text-center" >
                <div class="card-header border-0">
                    <h4>Users</h4>
                </div>
                <div class="card-body border-0">
                <i class="fas fa-users fa-2x"></i>
                </div>
                <div class="card-footer border-0">
                <a href="blogUsers.php" class="btn btn-warning text-white border-white">VIEW</a>
                </div>
            </div>
            </div>
        </div>
    </div>  
 
    
</body>
</html>