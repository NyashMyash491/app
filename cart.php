<!DOCTYPE html>
<html lang="en">
<?php include('blocks/head.php'); ?>

<body>
    <div class="wrapper">
        <div class="top">
            <?php include('blocks/header.php'); ?>
            <?php include('blocks/nav.php'); ?>
            <?php include('blocks/jumbotron.php'); ?>
            <section class="cart_table center">
                <div class="cart_goods_header">
                    <div class="righted">
                        <div class="first_cart_good">Product Details</div>
                        <div class="right_item">Unite Price</div>
                        <div class="right_item">Quantity</div>
                        <div class="right_item">Shipping</div>
                        <div class="right_item">Subtotal</div>
                        <div class="right_item">Action</div>
                    </div>
                </div>
                <div class="cart_product">
                    <a href="static/img/single_page.php"><img src="static/img/product_cart1.png" alt="product_1"></a>
                    <div class="cart_product_text">
                        <a href="static/img/single_page.php">
                            <h3 class="cart_h">MANGO PEOPLE T-SHIRT</h3>
                        </a>
                        <div class="color_size">
                            <h3 class="cart_option">Color: <span class="cart_param"> Red</span> </h3>
                            <h3 class="cart_option">Size: <span class="cart_param"> XXI</span></h3>
                        </div>
                    </div>
                    <div class="righted_option">
                        <div class="right_item1">$150</div>
                        <div class="right_item1"><input class="right_input" type="number" value="1"></div>
                        <div class="right_item1">FREE</div>
                        <div class="right_item1">$300</div>
                        <div class="right_item1"><a class="cross__cart" href="">&times</a></div>
                    </div>
                </div>

                <div class="cart_product">
                    <a href="static/img/single_page.php"><img src="static/img/product_cart2.png" alt="product_2"></a>
                    <div class="cart_product_text">
                        <a href="static/img/single_page.php">
                            <h3 class="cart_h">MANGO PEOPLE T-SHIRT</h3>
                        </a>
                        <div class="color_size">
                            <h3 class="cart_option">Color: <span class="cart_param"> Red</span> </h3>
                            <h3 class="cart_option">Size: <span class="cart_param"> XXI</span></h3>
                        </div>
                    </div>
                    <div class="righted_option">
                        <div class="right_item1">$150</div>
                        <div class="right_item1"><input class="right_input" type="number" value="1"></div>
                        <div class="right_item1">FREE</div>
                        <div class="right_item1">$300</div>
                        <div class="right_item1"><a class="cross__cart" href="">&times</a></div>
                    </div>
                </div>

                <div class="cart_product">
                    <a href="static/img/single_page.php"><img src="static/img/product_cart3.png" alt="product_3"></a>
                    <div class="cart_product_text">
                        <a href="static/img/single_page.php">
                            <h3 class="cart_h">MANGO PEOPLE T-SHIRT</h3>
                        </a>
                        <div class="color_size">
                            <h3 class="cart_option">Color: <span class="cart_param"> Red</span> </h3>
                            <h3 class="cart_option">Size: <span class="cart_param"> XXI</span></h3>
                        </div>
                    </div>
                    <div class="righted_option">
                        <div class="right_item1">$150</div>
                        <div class="right_item1"><input class="right_input" type="number" value="1"></div>
                        <div class="right_item1">FREE</div>
                        <div class="right_item1">$300</div>
                        <div class="right_item1"><a class="cross__cart" href="">&times</a></div>
                    </div>
                </div>
            </section>

            <div class="double_but center">
                <a href="">
                    <div class="clear_cart">CLEAR SHOPPING CART</div>
                </a>
                <a href="product1.php">
                    <div class="clear_cart">CONTINUE SHOPPING</div>
                </a>
            </div>
            <section class="feedback center">
                <div class="shipping">
                    <h3 class="ship_h3">Shipping adress</h3>
                    <select class="country_select" name="country">
                        <option value="value1" selected>Bangladesh</option>
                        <option value="value2">Russia</option>
                        <option value="value3">Canada</option>
                    </select>
                    <input class="cart_input" type="text" placeholder="State">
                    <input class="cart_input" type="text" placeholder="Postcode/Zip">
                    <a href="">
                        <div class="shipping_button">GET A QUOTE</div>
                    </a>
                </div>

                <div class="shipping">
                    <h3 class="ship_h3">Coupon discount</h3>
                    <div class="coupon_text">Enter your coupon code if you have one</div>
                    <input class="cart_input" type="text" placeholder="State">
                    <a href="">
                        <div class="coupon_button">Apply Coupon</div>
                    </a>
                </div>

                <div class="grand_total">
                    <div class="grand_inner">
                        <div class="sub_total">Sub total <span class="ninety_pad">$900</span></div>
                        <div class="final_grand">GRAND TOTAL <span class="ninety">$900</span></div>
                    </div>
                    <a href="">
                        <div class="proceed">Proceed to checkout</div>
                    </a>
                </div>
            </section>
            <?php include('blocks/subscribe.php'); ?>
        </div>
    </div>
    <?php include('blocks/footer.php'); ?>
    <?php include('blocks/scripts.php'); ?>
    <script src="js/subsc__slider.js"></script>

</html>