<?php
    require_once 'class/categories.php';
    $category = new Categories();

    if(isset($_POST['category_register'])){
        $category_name = $_POST['category_name'];

        $addCategory = $category->addCategory($category_name);
    }


    
?>