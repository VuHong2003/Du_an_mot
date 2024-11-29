<?php

require_once '../models/Dashboard.php';
class DashboardController extends Dashboard{
    public function index(){
        $countUsers = $this->CountUser();
        // var_dump($countUsers);
        // die();
        include '../views/admin/index.php';
    }
}
