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
<div class="container w-50 my-5 text-center">
        <h2 class="display-4">Login</h2>
        <form action="" method="post">
            <div class="form-group mx-auto mt-5 col-md-6 border-bottom d-inline-block mx-3 mb-4">
               <input type="text" name="username" placeholder="USERNAME" class="border-0   text-center form-control" id=""> 
            </div>           
            <div class="form-group mx-auto col-md-6 border-bottom d-inline-block mx-3 mb-4 ">
               <input type="password" name="password" placeholder="PASSWORD" class="border-0 text-center form-control" id=""> 
            </div>           
            <div class="form-group mx-auto col-md-6 ">
               <input type="submit" name="enter" value="ENTER" class="form-control btn btn-dark text-white" id=""> 
            </div> 
            <div class="form-row col-md-12">
                <div class="form-inline mx-auto mt-5 ">
                    <!-- <input type="text" name="create_account" value="CREATE ACCOUNT" class="border-0 text-center form-control" id="">                       -->
                    <h6 class="form-control border-0"><a href="register.php">CREATE ACCOUNT</a></h6>
                    <!-- <input type="text" name="recover_account" value="RECOVER ACCOUNT" class="border-0 text-center form-control" id="">  -->
                   
                </div> 
            </div>               
        </form>
    </div>
    
</body>
</html>

<?php
    if(isset($_POST['enter'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        enter($username,$password);

    }
?>