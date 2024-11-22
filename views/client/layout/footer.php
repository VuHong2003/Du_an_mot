
<footer class="footer">
    <div class="container_footer">
        <div class="row_footer">
            <div class="border_footer w-col-12">
                <div class="box_search_footer">
                    <a href=""><img src="../public/images/logo/logo.png" alt="" /></a>
                    <form action="">
                        <label for="">Subscribe to our newsletter</label>
                        <div class="search_footer">
                            <input type="text" name="" id="" placeholder="Your email address">
                            <button class="btn_subscribe flex">Subscribe</button>
                        </div>
                    </form>
                    <nav class="nav_items_footer">
                        <a href="" class="a_none"><i class="fa-brands fa-facebook"></i></a>
                        <a href="" class="a_none"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="" class="a_none"><i class="fa-brands fa-instagram"></i></a>
                        <a href="" class="a_none"><i class="fa-brands fa-youtube"></i></i></a>
                    </nav>
                </div>
            </div>
            <div class="border_footer">
                <div class="flex w-flex">
                    <div class="full_footer">
                        <h4>Support</h4>
                        <nav class="nav_content_footer">
                            <a href="" class="a_none">Help</a>
                            <a href="" class="a_none">Return & Exchange</a>
                            <a href="" class="a_none">Shipping</a>
                            <a href="" class="a_none">Size Charts</a>
                        </nav>
                    </div>
                    <div class="full_footer">
                        <h4>Legal</h4>
                        <nav class="nav_content_footer ">
                            <a href="" class="a_none">Cookie Setting</a>
                            <a href="" class="a_none">Terms & Conditions</a>
                            <a href="" class="a_none">Privacy Policy</a>
                            <a href="" class="a_none">About Us</a>
                        </nav>
                    </div>
                    <div class="full_footer">
                        <h4>Contact</h4>
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>House:25, Road:05, Block:A,  Dhaka.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <span>contact@example.com</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span>01256398745</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <hr class="whr">
        <div class="end_foot">
            <p>© eBazaar by iNiLabs 2024, All Rights Reserved.</p>
        </div>
    </div>
</footer>
<script>
    function toggleDropdown() {
        const dropdown = document.getElementById("accountDropdown");
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    }

    // Close the dropdown if clicked outside
    window.onclick = function(event) {
        const dropdown = document.getElementById("accountDropdown");
        if (!event.target.closest(".account")) {
            dropdown.style.display = "none";
        }
    };
   
    function toggleNavbar() {
        const navbar = document.querySelector(".list_nav");
        navbar.classList.toggle("active");

    }
   

</script>