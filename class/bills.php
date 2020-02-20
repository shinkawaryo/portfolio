<?php
    require_once 'database.php';

    class Bills extends Database{
        public function addAdminOrder(){
           
            $sql = "INSERT INTO bills(account_id,menu_id,order_id) SELECT account_id,menu_id,order_id FROM orders";

            $result = $this->conn->query($sql);
        

            if($result == false){
                die("CANNOT ADD ADMIN ORDER ".$this->conn->connect_error);
            }else{
                header("Location: UI/newUserMenu.php");
            }
        }

        
        public function displayAllOrder(){
            $sql = "SELECT * FROM bills INNER JOIN menu ON bills.menu_id = menu.menu_id INNER JOIN accounts ON bills.account_id = accounts.account_id INNER JOIN orders ON bills.order_id = orders.order_id WHERE serve_time IS NULL";

            $result = $this->conn->query($sql);

            $rows = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

                    $rows[] = $row;
                }
                return $rows;
            }
        }


        public function displayBill(){
            $sql = "SELECT * FROM bills INNER JOIN menu ON bills.menu_id = menu.menu_id INNER JOIN accounts ON bills.account_id = accounts.account_id INNER JOIN orders ON bills.order_id = orders.order_id WHERE accounts.account_id = '".$_SESSION['login_id']."'";

            $result = $this->conn->query($sql);

            $rows = array();

            if($result->num_rows >0){
                while($row = $result->fetch_assoc()){

                    $rows[] = $row;
                }
                return $rows;
            }
        }



        


    }
?>