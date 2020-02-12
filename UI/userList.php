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
    <script src="https://kit.fontawesome.com/ee07aedf32.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
</head>
<body>
    
    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-8">
            <table class="table table-hover">
                <thead class="thead thead-dark text-uppercase">
                    <th>#</th>
                    <th>Username</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php
                         $userList = $user->displayUser();

                         foreach($userList as $all_user){
                            $account_id = $all_user['account_id'];
                        echo "
                            <tr>
                                <td>".$all_user['account_id']."</td>
                                <td>".$all_user['username']."</td>
                                
                                <td><a href='deleteUser.php?account_id=$account_id' role='button' class='btn btn-outline-danger'>Delete User</a></td>
                            </tr> 
                        ";
                         }
                    ?>
                    
                </tbody>
            </table>
            </div>
           
 
    
</body>
</html>