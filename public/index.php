<?php
$action = isset($_GET['act']) ? $_GET['act'] : 'client';
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
        include '../views/admin/category/list.php';
        break;
    case 'category-create':
        include '../views/admin/category/create.php';
        break;
    case 'category-edit':
        include '../views/admin/category/edit.php';
        break;
    // ======================== CLIENT ===========================

    // http://localhost/Du_an_mot/public/?act=client
    case 'client':
        include '../views/client/index.php';
        break;

    // ======================== AUTH ===========================
    case 'login':
        include '../views/client/auth/login.php';
        break;
    case 'register':
        include '../views/client/auth/register.php';
        break;
}
