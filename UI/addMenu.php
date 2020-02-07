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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="">
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

