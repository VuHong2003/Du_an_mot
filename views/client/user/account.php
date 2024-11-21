<body>
    <section class="profile">
        <div class="container center">
            <div class="row">
                <div class="profile_right">
                    <div class="card">
                        <div class="information text-center">
                            <a href="">
                                <img src="<?= 'assets/client/images/' ?>avatar/avatar.jpg" alt="" class="image text-center">
                            </a>
                            <h3 class="capitalize">miron mahmud</h3>
                            <p class="">+8801838288389</p>
                        </div>
                        <nav class="list_nav">
                            <a href="?act=dashboard&id=<?= $_GET['id'] ?>" class="active">
                                <p>
                                    <i class="fa-solid fa-table-cells"></i>
                                    <span class="capitalize ">dashboard</span>
                                </p>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-basket-shopping"></i>
                                <span class="capitalize">order history</span>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-arrows-rotate"></i>
                                <span class="capitalize">return orders</span>
                            </a>
                            <a href="?act=account&id=<?=$_GET['id']?>">
                                <i class="fa-solid fa-user"></i>
                                <span class="capitalize">account information</span>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-location-dot"></i>
                                <span class="capitalize">addresses</span>
                            </a>
                            <a href="">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="capitalize">logout</span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="dashboard">
                    <h2 class="capitalize green">account information
                    </h2>
                    <form action="">
                        <div class="form">
                            <p class="capitalize title_h5">personal details</p>
                            <div class="list_input flex">
                                <div class="sub_input">
                                    <label for="" class="capitalize">full name</label>
                                    <input type="text">
                                </div>
                                <div class="sub_input">
                                    <label for="" class="capitalize">email address</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="list_input flex">
                                <div class="sub_input">
                                    <label for="" class="capitalize">phone number</label>
                                    <input type="text">
                                </div>
                                <div class="sub_input">
                                    <label for="" class="capitalize">upload image</label>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <p class="capitalize title_h5">change password</p>
                            <div class="list_input flex">
                                <div class="sub_input">
                                    <label for="" class="capitalize">old password</label>
                                    <input type="text">
                                </div>

                            </div>
                            <div class="list_input flex">
                                <div class="sub_input">
                                    <label for="" class="capitalize">new password</label>
                                    <input type="text">
                                </div>
                                <div class="sub_input">
                                    <label for="" class="capitalize">confirm password</label>
                                    <input type="text">
                                </div>
                            </div>
                            <button type="submit" class="capitalize">save changes</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
</body>

</html>