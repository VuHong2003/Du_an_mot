<?php
    class Connect {
        public function connect(): PDO {
            $serverName = 'localhost';
            $userName = 'root';
            $password = '';
            $myDB = 'ebazaar';
            try {
                // Corrected the DSN (Data Source Name) and parameter formatting
                $conn = new PDO("mysql:host=$serverName;dbname=$myDB", $userName, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch (Throwable $th) {
                echo 'Kết nối thất bại: ' . $th->getMessage();
                return null;    
            }
        }
    }
?>
