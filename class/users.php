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

        public function login($username,$password){
            $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";

            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                return false;
            }
        }


        public function displayUser(){
            $sql = "SELECT * FROM accounts";
            $result = $this->conn->query($sql);

            $rows = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }
        }


        public function deleteUser($account_id){
            $sql = "DELETE accounts, users FROM accounts INNER JOIN users ON accounts.account_id = users.account_id  WHERE accounts.account_id = '$account_id'";

            $result = $this->conn->query($sql);

            if($result == false){
                die("Cannot Delete: ".$this->conn->error);
            }else{
                header("Location: userList.php");
            }
        }
    }
?>