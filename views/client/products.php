<?php include '../views/client/layout/header.php'; ?>
<link
    href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="client/assets/css/products.css">
<link rel="stylesheet" href="client/assets/css/style.css">
<main>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Price</h3>
            <div class="price-filter">
                <label for="min-price">Min Price</label>
                <input type="number" id="min-price" placeholder="0" />
                <label for="max-price">Max Price</label>
                <input type="number" id="max-price" placeholder="200" />
                <input type="range" min="0" max="200" />
            </div>

            <h3>Sort By</h3>
            <div class="sort-options">
                <label><input type="radio" name="sort" value="newest" /> Newest</label>
                <label><input type="radio" name="sort" value="low-to-high" /> Price Low
                    To High</label>
                <label><input type="radio" name="sort" value="high-to-low" /> Price High
                    To Low</label>
                <label><input type="radio" name="sort" value="popular" /> Popular</label>
            </div>

            <h3>Weight</h3>
            <div class="weight-options">
                <label><input type="radio" name="weight" value="3" /> (3)
                    Kilogram</label>
                <label><input type="radio" name="weight" value="4" /> (4)
                    Kilogram</label>
                <label><input type="radio" name="weight" value="5" /> (5)
                    Kilogram</label>
                <label><input type="radio" name="weight" value="6" /> (6)
                    Kilogram</label>
            </div>
        </div>

        <!-- Product List -->
        <div class="product-list">
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Watermelon Medium 4kg +</h4>
                <p>Price: $120.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Apple Golden Delicious</h4>
                <p>Price: $121.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Beef Premium Cube</h4>
                <p>Price: $122.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Salmon Sea Large Fish</h4>
                <p>Price: $150.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Salmon Sea Large Fish</h4>
                <p>Price: $150.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Salmon Sea Large Fish</h4>
                <p>Price: $150.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Salmon Sea Large Fish</h4>
                <p>Price: $150.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Salmon Sea Large Fish</h4>
                <p>Price: $150.00</p>
                <button>Add</button>
            </div>
            <div class="product-card">
                <img src="../public/images/product-detail/01.jpg" alt="" />
                <h4>Salmon Sea Large Fish</h4>
                <p>Price: $150.00</p>
                <button>Add</button>
            </div>

        </div>
    </div>
    <div class="turn-page">
        <div class="page-left">
            <p>Showing </p>
            <a href="#h">1</a>
            <p>to</p>
            <a href="#h">9</a>
            <p>of</p>
            <a href="#h">14</a>
            <p>result</p>
        </div>
        <div class="page-right">
            <li> <button class="back-button">Prev</button>
            </li>
            <li> <button class="paginate-buttons activity">1</button>
            </li>
            <li> <button class=" paginate-buttons"">2</button>
            </li>
            <li> <button class=" next-button">Next</button>
            </li>
        </div>
    </div>
</main><?php include '../views/client/layout/footer.php'; ?>

