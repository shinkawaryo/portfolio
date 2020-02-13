<?php
    require_once 'database.php';

    class Orders extends Database{
        public function addOrder($order_menu,$account_id,$order_quantity,$date){
            $sql = "INSERT INTO orders(order_time,menu_id,account_id,order_quantity) VALUES ('$date','$order_menu','$account_id','$order_quantity')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD ORDER ".$this->conn->connect_error);
            }else{
                header("Location: UI/userMenu.php");            
            }
        }



    }
?>