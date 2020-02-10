<?php
    require 'database.php';

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

        public function deleteCategory($category_id){
            $sql = "DELETE FROM categories WHERE category_id = '$category_id'";

            $result = $this->conn->query($sql);

            if($result == false){
                die("Cannot Delete: ".$this->conn->error);
            }else{
                header("Location: categoryList.php");
            }
        }


        public function specificCategory($specific_category_id){
            $sql = "SELECT * FROM categories INNER JOIN menu ON categories.category_id = menu.category_id WHERE categories.category_id = '$specific_category_id'";

            $result = $this->conn->query($sql);

            $row = array();

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }
                return $rows;
            }

        }
        
    }
?>