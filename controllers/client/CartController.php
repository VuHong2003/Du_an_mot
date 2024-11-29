<?php
require_once '../models/Cart.php';
class CartController extends Cart
{
    public function index() {
        $carts = $this->getAllCart();
        // echo '<pre>';
        // print_r($carts);
        // echo '</pre>';
        $sum = 0;
        foreach($carts as $cart) {
            $sum += $cart['variant_sale_price'] * $cart['quantity'];
        }
        // echo '<pre>';
        // print_r($sum);
        // echo '</pre>';
        include '../views/client/cart/carts.php';
    }

    public function addToCartOderByNow()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
            if (empty($_POST['variant_id'])) {
                $_SESSION['error'] = 'Vui lòng chọn cân nặng.';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
            $checkCart = $this->checkCart();
            // var_dump($_POST); die();
            if ($checkCart) {
                $quantity = $checkCart['quantity'] + $_POST['quantity'];
                $updateCart = $this->updateCart($_SESSION['user']['id'], $_POST['product_id'], $_POST['variant_id'], $quantity);
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            } else {
                $addToCart = $this->addToCart(
                    $_SESSION['user']['id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $_POST['quantity']
                );
                
                    $_SESSION['success'] = 'Thêm giỏ hàng thành công';
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit();
            }
        }
    }
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_cart'])) {
            if(isset($_POST['quantity']) ) {
                foreach($_POST['quantity'] as $cart_id => $quantity) {
                    $this->updateCartById($cart_id, $quantity);
                }
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                exit();
            }
        }
    }

    public function delete() {
        try{
            $this->deleteCart($_GET['cart_id']);
            $_SESSION['success'] = 'Xóa danh mục thành công';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }catch(\Throwable $th){
            $_SESSION['error'] = 'Xóa danh mục thất bại. Vui lòng thử lại';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit();
            // echo '<pre>';
            // var_dump($_POST);
            // echo '<pre>';
        }
    }
}
