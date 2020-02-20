<?php
    include 'adminheader.php';
?>

<div class="container-fluid m-0 p-0">            
                    <h1 class="display-1 bg-secondary text-white"><i class="fas fa-user-cog"></i>Add Category</h1>              
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
        <h2 class="text-center">ADD CATEGORY</h2>
        <form action="../categoryAction.php" method="post">
            <div class="form-row mb-3">
                <div class="form-grop col-md-6 mx-auto">
                    <label for="product_name">Category Name</label>
                    <input type="text" name="category_name" value="" id="" class="form-control mb-3">
                    <input type="submit" value="Category Register" name="category_register" class="bg-primary form-control text-white">
                </div>
                
            </div>
        </form>
    </div>
    
</body>
</html>