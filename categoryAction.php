<?php
    require_once 'class/categories.php';
    $category = new categories();

    if(isset($_POST['category_register'])){
        $category_name = $_POST['category_name'];

        $addCategory = $category->addCategory($category_name);
    }


    
?>