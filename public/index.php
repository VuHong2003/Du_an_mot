<?php
session_start();
require_once '../controllers/admin/CategoryController.php';
require_once '../controllers/admin/ProductController.php';
$action = isset($_GET['act']) ? $_GET['act'] : 'admin';
$categoryAdmin = new CategoryController();
$productAdmin = new ProductController();
switch ($action) {
        // http://localhost/Du_an_mot/public/?act=admin
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
        // include '../views/admin/category/list.php';
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

        // http://localhost/Du_an_mot/public/?act=client
    case 'client':
        include '../views/client/index.php';
        break;
    case 'product-detail':
        include '../views/client/product-detail.php';
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
}
