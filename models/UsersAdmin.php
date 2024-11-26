<?php
require_once '../connect/connect.php';
class UsersAdmin extends connect
{
    public function listUser()
    {
        $sql = 'SELECT * FROM `users`';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function create($name, $avatar, $address, $email, $phone, $password, $role_id, $gender)
    {
        $spl = 'INSERT INTO users(name, avatar, address, email, phone, password, role_id, gender) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($spl);
        return $stmt->execute([$name, $avatar, $address, $email, $phone, $password, $role_id, $gender]);
    }
}
