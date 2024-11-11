<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="client/assets/css/style.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <title>Trang chủ</title>
    </head>
    <body>
        <header class="header">
            <div class="top_header">
                <div class="logo">
                    <a href="" class="logo a_none">
                        <img src="./assets/image/logo.png" alt="" />
                    </a>
                </div>
                <div class="box_search">
                    <form action="">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="search" placeholder="Search...">
                    </form>
                </div>
                <div class="group_items">
                    <div class="paper_group">
                        <button>
                            <img src="./assets/image/language_vn.png" alt="" class="language ">
                            <span class="capitalize">Vietnam</span>
                            <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                        </button>
                        <a href="" class="box_favourite ">
                            <div class="favourite"><i class="fa-regular fa-heart favourite" style="color: #ffffff;"></i></div>
                            <span class="capitalize">Yêu thích</span>
                        </a>
                       
                        <div class="account">
                            <button class="box_favourite">
                                <div class="favourite"><i class="fa-regular fa-user" style="color: #ffffff;"></i></div>
                                <span class="capitalize">tài khoản</span>
                                <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="hr">
            <div class="navbar_header">
                <div class="items flex center">
                    <div class="item_left flex">
                        <div class="category_group">
                            <button class="btn btn_category">
                                <i class="fa-solid fa-bars"></i>
                                <span class="capitalize">Browse Category</span>
                                <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                            </button>
                            <ul class="list_nav">
                                <li class="category_item">
                                    <button class="category_menu">
                                        <span>vegetable</span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </li>
                                <li class="category_item">
                                    <button class="category_menu">
                                        <span>vegetable</span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </li>
                                <li class="category_item">
                                    <button class="category_menu">
                                        <span>vegetable</span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </li>
                                <li class="category_item">
                                    <button class="category_menu">
                                        <span>vegetable</span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </li>
                                <li class="category_item">
                                    <button class="category_menu">
                                        <span>vegetable</span>
                                        <i class="fa-solid fa-chevron-right"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <nav class="nav_items">
                            <a href="#!" class="a_none capitalize">Trang chủ</a>
                            <a href="#!" class="a_none capitalize">Offers</a>
                            <a href="#!" class="a_none capitalize">Daily Deals</a>
                            <a href="#!" class="a_none capitalize">Flash Sale</a>
                        </nav>
                    </div>
                    <div class="item_right">
                        <div class="contact">
                            <i class="fa-solid fa-headphones-simple"></i>
                            <span>01236589745</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
