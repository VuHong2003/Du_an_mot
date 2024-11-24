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
                <div class="cart_left">
                    <div>
                        <ul>
                            <li class="items_prd ">
                                <img src="../public/images/product/02.jpg" alt="" class="products_img">
                                <div class="information_cart">
                                    <div class="box_ifm">
                                        <h3 class="capitalize">Apple Golden Delicious large size (Green Apple)</h3>
                                        <p class="capitalize ">4 kilogram</p>
                                        <p>
                                            <span class="price fz-20">$120.00</span>
                                            <del class="line-through fz-16">$150.00</del>
                                        </p>
                                    </div>
                                    <div class="action flex">
                                        <div>
                                            <div class="border_action">
                                                <button class="btn_action decrease"><i class="fa-solid fa-circle-minus"></i></button>
                                                <span class="quantity">1</span>
                                                <button class="btn_action increase"><i class="fa-solid fa-circle-plus"></i></button>
                                            </div>
                                        </div>
                                        <button class="btn_remove capitalize">
                                            <i class="fa-regular fa-trash-can"></i> xóa
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="items_prd ">
                                <img src="../public/images/product/02.jpg" alt="" class="products_img">
                                <div class="information_cart">
                                    <div class="box_ifm">
                                        <h3 class="capitalize">Apple Golden Delicious large size (Green Apple)</h3>
                                        <p class="capitalize ">4 kilogram</p>
                                        <p>
                                            <span class="price fz-20">$120.00</span>
                                            <del class="line-through fz-16">$150.00</del>
                                        </p>
                                    </div>
                                    <div class="action flex">
                                        <div>
                                            <div class="border_action">
                                                <button class="btn_action decrease"><i class="fa-solid fa-circle-minus"></i></button>
                                                <span class="quantity">1</span>
                                                <button class="btn_action increase"><i class="fa-solid fa-circle-plus"></i></button>
                                            </div>
                                        </div>
                                        <button class="btn_remove capitalize">
                                            <i class="fa-regular fa-trash-can"></i> xóa
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-right capitalize">
                            <a href="" class="next_checkout">Tiến hành thanh toán</a>
                        </div>
                    </div>

                </div>
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
                            <span class="font-medium">$500.00</span>
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
                        <p class="font-semibold">$535.80</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
<?php include '../views/client/layout/footer.php'; ?>