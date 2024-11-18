<?php
    class connect {
        public function connect(): PDO {
            $severName = 'location';
            $userName = 'root';
            $passWord = '';
            $myDB = 'ebazaar';
            try{
                $conn = new PDO("mysql:host=$severName;dbName=$myDB,userName: $userName,password: $passWord");
                $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
                return $conn;
            }catch (Throwable $th){
                echo 'Ket noi that bai'.$th -> getMessage();
                return null;    
            }
        }
    }
    
?>
