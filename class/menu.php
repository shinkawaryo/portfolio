<?php
    require_once 'database.php';

    class menu extends Database{
        public function addMenu($menu_name,$menu_price,$menu_picture,$category_id){
            $sql = "INSERT INTO menu(menu_name,menu_price,menu_picture,category_id) VALUES ('$menu_name','$menu_price','$menu_picture','$category_id')";

            // echo $sql;
            if($this->conn->query($sql)){
                return 1;
            }else{
                echo "Not saved: ".$this->conn->error;
                return 0;
            }
        }


        public function displayMenu(){
            $sql = "SELECT * FROM menu INNER JOIN categories ON menu.category_id = categories.category_id";
            $result = $this->conn->query($sql);

            $rows = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){

                    $rows[] = $row;
                }
                return $rows;
            }
        }


        public function getspecificMenu($menu_id
        ){
            $sql = "SELECT * FROM menu INNER JOIN categories ON menu.category_id = categories.category_id WHERE menu_id = '$menu_id'";
            $result = $this->conn->query($sql);

            if($result == false){
                die("No record found: ".$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }

        public function deleteMenu($menu_id){
            $sql = "DELETE FROM menu WHERE menu_id = '$menu_id'";

            $result = $this->conn->query($sql);

            if($result == false){
                die("Cannot Delete: ".$this->conn->error);
            }else{
                header("Location: menuList.php");
            }
        }

        public function editMenu($new_menu_name,$new_menu_price,$new_category_id,$new_menu_picture,$new_menu_amount,$menu_id){

            $sql = "UPDATE menu
            SET menu_name = '$new_menu_name',
                menu_price = '$new_menu_price',
                category_id = '$new_category_id',
                menu_picture = '$new_menu_picture',
                menu_amount = '$new_menu_amount'
                WHERE menu_id = '$menu_id'
            ";

            
            if($this->conn->query($sql)){
                return 1;
            }else{
                echo "Not Update: ".$this->conn->error;
                return 0;
            }
        }


        public function menuByCategory(){
            $sql = "SELECT * FROM menu INNER JOIN categories ON menu.category_id = categories.category_id WHERE category_id ='' ";

            $result = $this->conn->query($sql);

            $row = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }

        }

        public function deleteMenu($category_id){
            $sql = "DELETE FROM menu INNER JOIN categories ON menu.category_id = categories.category_id WHERE category_id = '$category_id'";

            $result = $this->conn->query($sql);

            if($result == false){
                die("Cannot Delete: ".$this->conn->error);
            }else{
                header("Location: categoryList.php");
            }
        }
    }
?>