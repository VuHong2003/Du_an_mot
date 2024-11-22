<?php
class Connect
{
    private $conn;
    public function connect(): PDO
    {
        if ($this->conn === null) {
            $serverName = 'localhost';
            $userName = 'root';
            $password = '';
            $myDB = 'ebazaar';
            try {
                // Corrected the DSN (Data Source Name) and parameter formatting
                $this->conn = new PDO("mysql:host=$serverName;dbname=$myDB", $userName, $password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Throwable $th) {
                echo 'Kết nối thất bại: ' . $th->getMessage();
                return null;    
            }
        }
        return $this -> conn;
    }
}
