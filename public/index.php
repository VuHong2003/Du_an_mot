<?php
session_start();
require_once '../controllers/admin/CategoryController.php';
$action = isset($_GET['act']) ? $_GET['act'] : 'client';
$categoryAdmin = new CategoryController();
switch ($action) {
        // http://localhost/Du_an_mot/public/?act=admin
    case 'admin':
        include '../views/admin/index.php';
        break;
    case 'product':
        include '../views/admin/product/list.php';
        break;
    case 'product-create':
        include '../views/admin/product/create.php';
        break;
    case 'product-edit':
        include '../views/admin/product/edit.php';
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
        // ======================== AUTH ===========================
    case 'register':
        include '../views/client/auth/register.php';
        break;
    case 'login':
        include '../views/client/auth/login.php';
        break;
}