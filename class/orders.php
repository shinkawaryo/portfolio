<?php
    require_once 'database.php';

    class orders extends Database{
        public function addOrder($order_amount){
            $sql = "INSERT INTO orders(order_amount) VALUES ('$order_amount')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD ORDER ".$this->conn->connect_error);
            }else{
                header("Location: UI/userMenu.php");            
            }
        }



    }
?>