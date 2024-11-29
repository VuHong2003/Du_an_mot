<?php
    require_once '../connect/connect.php';
    class Home extends connect{
        public function searchProduct($kyw){
            $sql = "SELECT * FROM `products` WHERE `name` LIKE '%".$kyw."%'";
            $stmt= $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        
    }
?>