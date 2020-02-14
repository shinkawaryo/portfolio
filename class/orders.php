<?php
    require_once 'database.php';

    class Orders extends Database{
        public function addOrder($order_menu,$account_id,$order_quantity){
            $sql = "INSERT INTO orders(menu_id,account_id,order_quantity) VALUES ('$order_menu','$account_id','$order_quantity')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD ORDER ".$this->conn->connect_error);
            }else{
                header("Location: UI/newUserMenu.php");            
            }
        }


        public function addSpecOrder($spec_order_menu,$account_id,$spec_order_quantity){
            $sql = "INSERT INTO orders(menu_id,account_id,order_quantity) VALUES ('$spec_order_menu','$account_id','$spec_order_quantity')";

            $result = $this->conn->query($sql);

            if($result == false){
                die("CANNOT ADD ORDER ".$this->conn->connect_error);
            }else{
                header("Location: UI/newUserMenu.php");            
            }
        }


        public function displaySpecOrder(){
            $sql = "SELECT * FROM orders INNER JOIN menu ON orders.menu_id = menu.menu_id INNER JOIN accounts ON orders.account_id = accounts.account_id WHERE accounts.account_id = '".$_SESSION['login_id']."'";

            $result = $this->conn->query($sql);

            $rows = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function displayAllOrder(){
            $sql = "SELECT * FROM orders INNER JOIN menu ON orders.menu_id = menu.menu_id INNER JOIN accounts ON orders.account_id = accounts.account_id";

            $result = $this->conn->query($sql);

            $rows = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

                    $rows[] = $row;
                }
                return $rows;
            }
        }



    }
?>