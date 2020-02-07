<?php
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