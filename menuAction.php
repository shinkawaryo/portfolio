<?php
    require_once 'class/menu.php';
    $menu = new menu();

    if(isset($_POST['menu_register'])){
        $menu_name = $_POST['menu_name'];
        $menu_price = $_POST['menu_price'];
        $menu_picture = $_FILES['menu_picture']['name'];
        $category_id = $_POST['category_id']; 

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["menu_picture"]["name"]);

        $ans = $menu->addMenu($menu_name,$menu_price,$menu_picture,$category_id);

        if($ans == 1){
            move_uploaded_file($_FILES['menu_picture']['tmp_name'],$target_file);
            header("Location: UI/addMenu.php");
        }else{
            echo "Error";
        }

    }elseif(isset($_POST['update'])){
        $new_menu_name = $_POST['new_menu_name'];
        $new_menu_price = $_POST['new_menu_price'];
        $new_category_id = $_POST['new_category_id'];
        $new_menu_picture = $_FILES['new_menu_picture']['name'];
        $new_menu_amount = $_POST['new_menu_amount'];
        $menu_id = $_POST['menu_id'];
        $old_image = $_POST['old_picture'];

        if(empty($new_menu_picture)){
            $new_menu_picture = $old_image;
        }

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES['new_menu_picture']['name']);



        $ans = $menu->editMenu($new_menu_name,$new_menu_price,$new_category_id,$new_menu_picture,$new_menu_amount,$menu_id);

        if($ans == 1){
            move_uploaded_file($_FILES['new_menu_picture']['tmp_name'],$target_file);
            header("Location: UI/menuList.php");
        }else{
            echo "Error";
        }
    }
?>