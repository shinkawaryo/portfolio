<?php
    require_once 'database.php';

    class categories extends Database{
        public function addCategory($category_name){
            $sql = "INSERT INTO categories(category_name) VALUES ('$category_name')";

            $result = $this ->conn->query($sql);

            if($result == false){
                die("CANNOT ADD CATEGORY ".$this->conn->connect_error);
            }else{
                header("Location: UI/addCategory.php");
            }
        }


        public function displayCategory(){
            $sql = "SELECT * FROM categories";
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