<?php
    require_once 'class/users.php';
    $user = new Users();

    if(isset($_POST['register'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $createAccount = $user->createAccount($username,$password);
        if($createAccount == 1){
            $user->createUser($first_name,$last_name,$address,$contact_number,$email);
        }else{
            echo "DEAD";
        }
    }
?>