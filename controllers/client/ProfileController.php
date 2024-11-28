<?php
    require_once '../models/Category.php';
    require_once '../models/User.php';
    require_once '../models/Settings.php';
    class ProfileController extends User{
        protected $categories;
        protected $setting;
        public function __construct()
        {
            $this->categories   = new Category();
            $this->setting      = new Settings();
        }
        public function updateProfile(){
            $categories = $this->categories->listCategory();
            $GLOBALS['settings'] = $this->setting->getAllSetting();
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update-profile'])){
                // echo '<pre>';
                // print_r($_SESSION['user']);
                // echo '<pre>';
                $user = $this->updateUser($_POST['name'], $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['gender']);
                $errors = [];
                if(empty($_POST['name'])){
                    $errors['name'] = 'Vui lòng nhập tên tên';
                }
                if(empty($_POST['email'])){
                    $errors['email'] = 'Vui lòng nhập email';
                }
                if(empty($_POST['phone'])){
                    $errors['phone'] = 'Vui lòng nhập số điện thoại';
                }
                if(empty($_POST['address'])){
                    $errors['address'] = 'Vui lòng nhập địa chỉ';
                }
                if(empty($_POST['gender'])){
                    $errors['gender'] = 'Vui lòng chọn giới tính';
                }
                
                $_SESSION['errors'] = $errors;
                $user = $this->updateUser($_POST['name'], $_POST['address'], $_POST['email'], $_POST['phone'], $_POST['gender']);
                if($user){
                    $_SESSION['user'] = $this->getUserById($_SESSION['user']['id']);
                    $_SESSION['success'] = 'Cập nhật thông tin người dùng thành công'; 
                    header('Location: '.$_SERVER['HTTP_REFERER']);
                    exit();
                }else{
                    $_SESSION['error'] = 'Cập nhật thông tin không thành công. Vui lòng kiểm tra lại'; 
                    header('Location: '.$_SERVER['HTTP_REFERER']);
                    exit();
                }

            }
        
            include '../views/client/user/account.php';
        }
    }
?>