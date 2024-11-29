<?php
require_once '../connect/connect.php';
class Dashboard extends Connect
{
    public function CountUser()
    {
        $sql = "SELECT COUNT(id) AS count_user FROM users;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);   
    }
}
