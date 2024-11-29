<?php

require_once '../models/UsersAdmin.php';
class UserController extends UsersAdmin
{

    public function index()
    {
        $listUser = $this->listUser();
        $nameRole = $this->Role();
        include '../views/admin/Users/list.php';
    }
    public function createUser()
    {
        $nameRole = $this->Role();

        include '../views/admin/Users/create.php';
    }





    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['createUser'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập họ và tên';
            }

            if (empty($_POST['gender'])) {
                $errors['gender'] = 'Vui lòng chọn giới tính';
            }
            if (empty($_POST['address'])) {
                $errors['address'] = 'Vui lòng nhập địa chỉ';
            }
            if (empty($_POST['email'])) {
                $errors['email'] = 'Vui lòng nhập email';
            }
            if (empty($_POST['phone'])) {
                $errors['phone'] = 'Vui lòng nhập số điện thoại';
            }
            if (empty($_POST['password'])) {
                $errors['password'] = 'Vui lòng nhập mật khẩu';
            }
            if (!isset($_FILES['avatar']) || $_FILES['avatar']['error'] !== UPLOAD_ERR_OK) {
                $errors['avatar'] = 'Vui lòng thêm file hình ảnh';
            }

            $_SESSION['errors'] = $errors;

            // $file = $_FILES['image'];
            // $image = $file['name'];
            // if (move_uploaded_file($file['tmp_name'], './images/user/' . $image)) {
            $createUser = $this->create($_POST['name'],  $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['role']);

            if ($createUser) {
                $_SESSION['success'] = 'Thêm thành viên';
                header('Location: index.php?act=users');
                exit();
            } else {
                $_SESSION['error'] = 'Thêm thành viên thất bại. Vui lòng thử lại';
                header('Location' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            // }
        }
        include '../views/admin/Users/create.php';
    }
    public function editUser()
    {
        if (isset($_GET['id'])) {
            $getUser = $this->detail();  // Lấy thông tin người dùng theo ID

            if ($getUser) {
                include '../views/admin/Users/edit.php';
            } else {
                $_SESSION['error'] = 'Không tìm thấy người dùng';
                header('Location: index.php?act=users');
                exit();
            }
        } else {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?act=users');
            exit();
        }
    }

    public function updateUser()
    {
        $getUser = $this->detail();
        $nameRole = $this->Role();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateUser'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập họ và tên';
            }
            if (empty($_POST['gender'])) {
                $errors['gender'] = 'Vui lòng chọn giới tính';
            }
            if (empty($_POST['address'])) {
                $errors['address'] = 'Vui lòng nhập địa chỉ';
            }
            if (!isset($_FILES['avatar']) || $_FILES['avatar']['error'] !== UPLOAD_ERR_OK) {
                $errors['avatar'] = 'Vui lòng thêm file hình ảnh';
            }
            $updateUse = $this->update($_POST['name'],  $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['password'], $_POST['role'], $_GET['id']);
            // var_dump($_POST);
            if ($updateUse) {
                $_SESSION['success'] = 'Cập nhật thành viên thành công';
                header('Location: index.php?act=users');
                exit();
            } else {
                $_SESSION['error'] = 'Cập nhật thành viên thất bại. Vui lòng thử lại';
                header('Location' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }



        include '../views/admin/Users/edit.php';
    }
}
