<?php
require_once '../models/Category.php';
require_once '../models/Product.php';
require_once '../models/Home.php';
require_once '../models/Settings.php';
class HomeController
{
    // SELECT * FROM `products` WHERE `name` LIKE '%a%'
    protected $categories;
    protected $products;
    protected $home;
    protected $setting;
    public function __construct()
    {
        $this->categories   = new Category();
        $this->products     = new product();
        $this->home         = new Home();
        $this->setting      = new Settings();
    }
    public function index()
    {
        // Tìm kiếm sản phẩm
        if (isset($_POST['kyw']) && $_POST['kyw'] != '') {
            $kyw = $_POST['kyw'];
            // var_dump($GLOBALS['category']); die();
            $productSearch = $this->home->searchProduct($kyw);
            $GLOBALS['settings'] = $this->setting->getAllSetting();
            include '../views/client/search.php';
        } else {
            // $kyw = '';
            $categories = $this->categories->listCategory();
            $products = $this->products->listProduct();
            $GLOBALS['settings'] = $this->setting->getAllSetting();
            // var_dump($setting); die();
            include '../views/client/index.php';
        }
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
