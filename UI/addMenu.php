<?php
    include 'adminheader.php';
?>

<div class="container-fluid m-0 p-0">            
                    <h1 class="display-1 bg-secondary text-white"><i class="fas fa-user-cog"></i>Add Menu</h1>              
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
        <h2 class="text-center">ADD PRODUCT</h2>
        <form action="../menuAction.php" method="post" enctype="multipart/form-data">
        <select name="category_id" class="form-control mb-3">
                <option selected disabled>CHOOSE THE TYPE</option>
               <?php
                    $categoryList = $category->displayCategory(); 
                    foreach($categoryList as $category){
                        $categoryID = $category['category_id'];
                        echo "
                            <option value='".$category['category_id']."'>".$category['category_name']."</option>
                        ";
                    }
               ?>
            </select>
            <div class="form-row mb-3">
                <div class="form-grop col-md-6">
                    <label for="product_name">Menu Name</label>
                    <input type="text" name="menu_name" value="" id="" class=" form-control ">
                </div>
                <div class="form-grop col-md-6">
                    <label for="price">Price</label>
                    <input type="number" name="menu_price" value="" id="" class=" form-control ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="file" name="menu_picture" id="" class="form-control">
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group mx-auto">
                    <input type="submit" value="Menu Register" name="menu_register" class="bg-primary form-control text-white">
                </div>
            </div>
            
        </form>
    </div>
    
</body>
</html>

