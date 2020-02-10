<?php
    require_once 'database.php';

    class Users extends Database{
        public function createAccount($username,$password){
            $sql = "INSERT INTO accounts(username,password) VALUES ('$username','$password')";

            $result = $this->conn->query($sql);
            
            if($result == false){
                die("CANNOT ADD ACCOUNT: ".$this->conn->connect_error);
            }else{
                return 1;
            }
        }

        public function createUser($first_name,$last_name,$address,$contact_number,$email){
            $last_account_id = $this->conn->insert_id;

            $sql = "INSERT INTO users(first_name,last_name,address,contact_number,email, account_id) VALUES ('$first_name','$last_name','$address','$contact_number','$email','$last_account_id')";

            echo $sql;
            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD USER: ".$this->conn->connect_error);
            }else{
                header("Location: UI/login.php");
            }
        }
    }
?>