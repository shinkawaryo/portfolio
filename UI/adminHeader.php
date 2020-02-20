<?php
    include '../userAction.php';
    include '../categoryAction.php';
    include '../menuAction.php';
    include '../orderAction.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ee07aedf32.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <form action="" method="post">
        <nav class="navbar nabver-expand-lg navbar-dark bg-dark text-white m-0 p-0">
                <div class="form-row m-0 p-0">
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Dashboard</button> -->
                    <a href="dashboard.php" class="navbar-brand p-0">Dashboard</a>
                    </div>
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Posts</button> -->
                    <a href="menuList.php" class="navbar-brand p-0">Menu</a>
                    </div>
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Categories</button> -->
                    <a href="categoryList.php" class="navbar-brand p-0">Categories</a>
                    </div>
                    <div class="form-group ml-3 p-0">
                    <!-- <button type="button" class="btn btn-link text-white">Users</button> -->
                    <a href="userList.php" class="navbar-brand p-0">Users</a>
                    </div>
                </div>
            </nav>
        </form>
    </div>
    