<?php
    include 'adminheader.php';
?>

<div class="container-fluid m-0 p-0">            
                    <h1 class="display-1 bg-secondary text-white"><i class="fas fa-user-cog"></i>Users</h1>              
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
                    <th>Username</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                         $userList = $user->displayUser();

                         foreach($userList as $all_user){
                            $account_id = $all_user['account_id'];
                        echo "
                            <tr>
                                <td>".$all_user['account_id']."</td>
                                <td>".$all_user['username']."</td>
                                
                                <td><a href='deleteUser.php?account_id=$account_id' role='button' class='btn btn-outline-danger'>Delete User</a></td>
                            </tr> 
                        ";
                         }
                    ?>
                    
                </tbody>
            </table>
            </div>
           
 
    
</body>
</html>