<?php
session_start();
require_once '../controllers/admin/CategoryController.php';
require_once '../controllers/admin/ProductController.php';
require_once '../controllers/client/HomeController.php';
require_once '../controllers/client/AuthController.php';
require_once '../controllers/client/ProfileController.php';
$action = isset($_GET['act']) ? $_GET['act'] : 'admin';
$categoryAdmin = new CategoryController();
$productAdmin = new ProductController();
$profile = new ProfileController();
//========================== CLIENT
$auth = new authController();
$home = new HomeController();
switch ($action) {
    case 'admin':
        include '../views/admin/index.php';
        break;
    case 'product':
        $productAdmin->index();
        break;
    case 'product-create':
        $productAdmin->create();
        break;
    case 'product-store':
        $productAdmin->store();
        break;
    case 'product-edit':
        $productAdmin->edit();
        break;
    case 'product-update':
        $productAdmin->update();
        break;
    case 'product-variant-delete':
        $productAdmin->deleteProductVariant();
        break;
    case 'product-delete':
        $productAdmin->deleteProduct();
        break;
    case 'category':
        $categoryAdmin->index();
        break;
    case 'category-create':
        $categoryAdmin->addCategory();
        break;
    case 'category-edit':
        $categoryAdmin->updateCategory();
        break;
    case 'category-delete':
        $categoryAdmin->deleteCategory($_GET['id']);
        break;
        // ======================== CLIENT ===========================

    case 'client':
        $home->index();
        break;
    case 'product-detail':
        // include '../views/client/product-detail.php';
        $home->getProductDetail();
        break;
    case 'products':
        include '../views/client/products.php';
        break;
        // ======================== AUTH ===========================

    case 'register':
        $auth->registers();
        break;
    case 'login':
        $auth->signins();
        break;
        // ======================== USER ===========================
    case 'profile';
       
        include '../views/client/user/dashboard.php';
        break;
    case 'update-profile';
        $profile->updateProfile();
        include '../views/client/user/account.php';
        break;
    case 'carts';
        include '../views/client/carts.php';
        break;
}
