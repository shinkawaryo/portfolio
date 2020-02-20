<?php
    include '../menuAction.php';
    include '../categoryAction.php';
    include '../orderAction.php';
    include '../billAction.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a href="newUserMenu.php" class="navbar-brand text-danger font-weight-bolder">MENU</a>
        <!-- TOGGLER/COLLAPSIBLE BUTTON -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAVBAR LINKS -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="nav navbar-nav">
                <div class="form-row">
                <?php
                    $allCategories = $category->displayCategory();

                    foreach($allCategories as $all_category){
                        $category_id = $all_category['category_id'];
                        $category_name = $all_category['category_name'];
                        echo "
                        <div Class='form-group'>
                        <li class='nav-item'>
                            <a class='nav-link text-capitalize text-white' href='newSpecificMenu.php?category_id=".$category_id."'>".$category_name."</a>
                        </li>
                        </div>
                        ";
                    }
                ?>
                <div class="form-group">
                <button class="form-control btn btn-danger text-white"><a class="text-white" href="billCalculator.php">bill</a></button>
                </div>
                </div>
                
            </ul>            
        </div>        
    </nav>