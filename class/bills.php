<?php
    require_once 'database.php';

    class Bills extends Database{
        public function addAdminOrder($account_id,$menu_id,$order_id,$count){

           for($i = 0;$i < $count;$i++){
            $sql = "INSERT INTO bills(account_id,menu_id,order_id) VALUES ('$account_id','$menu_id[$i]','$order_id[$i]')";

            $result = $this->conn->query($sql);

                if($result){
                    $sql2 = "UPDATE orders SET receive_status = 'received' WHERE order_id = $order_id[$i]";

                    $result2 = $this->conn->query($sql2);

                    if($result2){
                        header("Location: UI/newUserMenu.php");
                    }else{
                        die("ERROR IN UPDATING RECEIVED STATUS: ".$this->conn->error);
                    }
                }else{
                    echo "Error inserting to bills: ".$this->conn->error;
                }
            }

            // if($result == false){
            //     die("CANNOT ADD ADMIN ORDER ".$this->conn->connect_error);
            // }else{
            //     // echo "<script>
            //     //         window.location.replace('UI/newUserMenu.php');
            //     //         alert('Order Confirmed');
            //     //     </script>";
            //     header("Location: UI/newUserMenu.php");
            // }
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

        public function updateBillStatus($account_id){
            $sql = "UPDATE bills SET bill_status = 'finished' WHERE account_id ='$account_id'";

            $result = $this->conn->query($sql);

            if($result == false){
                die("Cannot Update Bill Status ".$this->conn->error);
            }
            
        }
            

            
        



        


    }
?>