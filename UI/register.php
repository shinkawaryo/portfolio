<?php
    include '../userAction.php';
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
        <h2 class="text-center">Registration</h2>
        <form action="../userAction.php" method="post">
            <div class="form-row">
                <div class="form-grop col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" value="" id="" class=" form-control ">
                </div>
                <div class="form-grop col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" value="" id="" class=" form-control ">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="address">Address</label>
                    <input type="text" name="address" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="e_mail">E-mail</label>
                    <input type="email" name="email" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="username">Username</label>
                    <input type="text" name="username" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="password">Password</label>
                    <input type="password" name="password" value="" id="" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <input type="submit" value="Register" name="register" class="form-control col-md-4">
                </div>
                <div class="form-group">
                    <h6 class="text-right text-inline">Have an account?<a href="login.php"> Sign In</a></h6> 
                    
                </div>
            </div>
            
        </form>
    </div>
    
</body>
</html>

