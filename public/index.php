<?php
session_start();
require_once '../controllers/admin/CategoryController.php';
require_once '../controllers/admin/ProductController.php';
require_once '../controllers/client/HomeController.php';
$action = isset($_GET['act']) ? $_GET['act'] : 'admin';
$categoryAdmin = new CategoryController();
$productAdmin = new ProductController();
//========================== CLIENT
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
        include '../views/client/auth/register.php';
        break;
    case 'login':
        include '../views/client/auth/login.php';
        break;
        // ======================== USER ===========================
    case 'dashboard';
        include '../views/client/user/dashboard.php';
        break;
    case 'account';
        include '../views/client/user/account.php';
        break;
    case 'carts';
        include '../views/client/carts.php';
        break;
}
