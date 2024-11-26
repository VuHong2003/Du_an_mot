<?php
require_once '../models/Category.php';
require_once '../models/Product.php';
class HomeController 
{
    protected $categories;
    protected $products;
    public function __construct()
    {
        $this->categories = new Category();
        $this->products = new product();
    }
    public function index()
    {
        $categories = $this->categories->listCategory();
        $products = $this->products->listProduct();

        include '../views/client/index.php';
    }
    public function getProductDetail()
    {
        $categories = $this->categories->listCategory();
        $productDetail = $this->products->getProductBySlug($_GET['slug']);
        // Hàm reset để lấy ra phần tử đầu tiên
        $productDetail = reset($productDetail);
        include '../views/client/product-detail.php';
    }
}
