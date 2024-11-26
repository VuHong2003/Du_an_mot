<?php
require_once '../models/UsersAdmin.php';
class UserController extends UsersAdmin
{
    public function index()
    {
        // $listCategories = $this->listCategory();
        include '../views/admin/users/list.php';
    }
}
