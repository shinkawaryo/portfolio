<?php
    include '../menuAction.php';
    include '../categoryAction.php';

    $menu_id = $_GET['menu_id'];

    $row = $menu->getSpecificMenu($menu_id);
    $picture = $row['menu_picture'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mx-auto w-50 my-5 border border-0">
            <div class="card-header bg-white text-dark border-0">
                <h2 class="text-center">Edit Menu</h2>
            </div>
        </div>
        <div class="card-body">
            <form action="../menuAction.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-12 mb-4">
                        <label for="menu_name">Menu Name</label>
                        <input type="text" name="new_menu_name" value="<?php  echo $row['menu_name'] ?>" class="p-4 form-control" id="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 mb-4">
                        <label for="menu_price">Price</label>
                        <input type="number" name="new_menu_price" value="<?php  echo $row['menu_price'] ?>" class="p-4 form-control" id="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 mb-4">
                    <label for="category_name">Category Name</label>
                    <select name="new_category_id" class="form-control form-control-lg">
                        <option value="<?php echo $row['category_id']?>" selected><?php echo $row['category_name']?></option>
                        
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
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 mb-4">
                        <label for="menu_picture">Menu Picture</label><br>
                        <img src='../upload/<?php echo $picture?>' class='img-fluid mb-3' alt='<?php echo $picture?>'><br>
                        <input type="file" name="new_menu_picture">
                        <input type="hidden" name="old_picture" value="<?php echo $row['menu_picture']?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 mb-4">
                        <label for="menu_amount">Amount
                        <input type="number" name="new_menu_amount" value="<?php  echo $row['menu_amount'] ?>" class="p-4 form-control" id="">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12 mb-4">
                        <input type="hidden" name="menu_id" value="<?php  echo $row['menu_id'] ?>"class="p-4 form-control" id="">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12 mb-4">
                        <input type="submit" name="update" value="update" class="btn btn-dark btn btn-lg text-uppercase form-control" id="">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>