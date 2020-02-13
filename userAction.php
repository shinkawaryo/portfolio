<?php
    require_once 'class/users.php';
    $user = new Users();

    session_start();

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


    }elseif(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $login = $user->login($username,$password);

        // print_r($login);

        if($login){
            $_SESSION['login_id'] = $login['account_id'];
            $_SESSION['status'] = $login['status'];

            if($_SESSION['status'] == 'A'){
                header("Location: UI/dashboard.php");
            }elseif($_SESSION['status'] == 'U'){
                header("Location: UI/userMenu.php");
            }

        }else{
            echo "INCORRECT USERNAME AND PASSWORD";
        }
    }
?>