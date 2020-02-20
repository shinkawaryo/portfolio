<?php
    include 'adminheader.php';
?>

<div class="container-fluid m-0 p-0">            
                    <h1 class="display-1 bg-secondary text-white"><i class="fas fa-user-cog"></i>Add User</h1>              
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

    <div class="container w-50 my-5">
        <h2 class="text-center">Registration</h2>
        <form action="../userAction.php" method="post">
            <div class="form-row">
                <div class="form-grop col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" value="" id="" class=" form-control ">
                </div>
                <div class="form-grop col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" value="" id="" class=" form-control ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="address">Address</label>
                    <input type="text" name="address" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="e_mail">E-mail</label>
                    <input type="email" name="email" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="username">Username</label>
                    <input type="text" name="username" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="password">Password</label>
                    <input type="password" name="password" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <input type="submit" value="Register" name="register" class="form-control col-md-4">
                </div>
                <div class="form-group">
                    <h6 class="text-right text-inline">Have an account?<a href="login.php"> Sign In</a></h6> 
                    
                </div>
            </div>
            
        </form>
    </div>
    
</body>
</html>

