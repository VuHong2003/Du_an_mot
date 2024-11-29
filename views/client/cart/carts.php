<?php include '../views/client/layout/header.php'; ?>

<link rel="stylesheet" href="client/assets/css/carts.css">
<link rel="stylesheet" href="client/assets/css/style.css">

<body>
    <main>
        <div class="container_cart">
            <div class="center w d-flex ">
                <a href="?act=client"><button class="btn_back_home"><i class="fa-solid fa-rotate-left back"></i></button></a>
                <div class="title_shopping">
                    <h4 class="capitalize">Giỏ hàng của bạn</h4>
                    <p>(2) items</p>
                </div>
            </div>
            <div class="box_cart center w d-flex">
                <form action="?act=update-cart" method="post">
                    <div class="cart_left">
                        <div>
                            <ul>
                                <?php foreach ($carts as $cart) : ?>
                                    <li class="items_prd ">
                                        <img src="./images/product/<?= $cart['product_image'] ?>" alt="" class="products_img">
                                        <div class="information_cart">
                                            <div class="box_ifm">
                                                <h3 class="capitalize"><?= $cart['product_name'] ?></h3>
                                                <p class="capitalize "><?= $cart['variant_weight_name'] ?></p>
                                                <p>
                                                    <span class="price fz-20"><?= number_format($cart['variant_sale_price'] * 1000) ?>đ</span>
                                                    <del class="line-through fz-16"><?= number_format($cart['variant_price'] * 1000) ?>đ</del>
                                                </p>
                                            </div>
                                            <div class="action flex">
                                                <div>
                                                    <div class="border_action">
                                                        <a class="btn_action decrease"><i class="fa-solid fa-circle-minus"></i></a>
                                                        <input type="number" name="quantity[<?= $cart['cart_id'] ?>]" value="<?= $cart['quantity'] ?>" class="quantity" min="1">
                                                        <a class="btn_action increase"><i class="fa-solid fa-circle-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div>
                                                        <button type="submit" name="update_cart" class="btn_remove capitalize">
                                                            <i class="fa-regular fa-trash-can"></i> Update
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <a href="?act=delete-cart&cart_id=<?= $cart['cart_id'] ?>" onclick="return confirm('Bạn có muốn xóa sản phẩm này?')" class="btn_remove capitalize">
                                                            <i class="fa-regular fa-trash-can"></i> xóa
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="text-right capitalize">
                                <a href="" class="next_checkout">Tiến hành thanh toán</a>
                            </div>
                        </div>

                    </div>
                </form>
                <div class="cart_right">
                    <form action="" class="form_coupon ">
                        <input type="text" placeholder="Nhập mã giảm giá">
                        <button>Áp dụng</button>
                    </form>
                    <div>
                        <h3>Tóm tắt đơn hàng</h3>
                    </div>
                    <ul class="list_amount">
                        <li class="flex">
                            <span class="capitalize">Tổng cộng</span>
                            <span class="font-medium"><?= number_format($sum * 1000) ?>đ</span>
                        </li>
                        <li class="flex">
                            <span class="capitalize">Phí vận chuyển</span>
                            <span class="font-medium">$7.00</span>
                        </li>
                        <li class="flex">
                            <span class="capitalize">Giảm giá</span>
                            <span class="font-medium">$000.00</span>
                        </li>
                    </ul>
                    <div class="flex">
                        <p class="capitalize font-semibold">Tổng cộng</p>
                        <p class="font-semibold"><?= number_format($sum * 1000) ?>đ</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
<?php include '../views/client/layout/footer.php'; ?>