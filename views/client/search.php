<?php include '../views/client/layout/header.php'; ?>
<link rel="stylesheet" href="client/assets/css/home.css">

<body>
    <div class="center home">
        <section class="categories_section">
            <div class="f_categories">
                <div class="container_home">
                    <h2>"<?=$kyw?>"</h2>
                </div>
                <div class="view_item">
                    <p>View All</p>
                </div>
            </div>
            <div class="popular_items">
                <?php foreach ($productSearch as $pro) : ?>
                <div class="flex_popular">
                    <div class="box_popular">
                        <div class="item_img">
                            <a href="?act=product-detail&slug=<?= $pro['slug'] ?>">
                                <img src="./images/product/<?= $pro['images'] ?>" alt=""
                                    class="img_home_prd image text-center">
                            </a>
                            <button class="heart-button"><i class="fa-regular fa-heart"></i></button>
                            <button class="bag-button"><i class="fa-solid fa-bag-shopping"></i>Add</button>
                        </div>
                        <div class="content_popular">
                            <div>
                                <p class="name_popular"><?= $pro['name'] ?></p>
                            </div>
                            <div>
                                <p class="price">Price</p>
                                <h4 class="number_price"><?= $pro['prices'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </section>
       
    </div>
</body>
<?php include '../views/client/layout/footer.php'; ?>