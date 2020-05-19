<!DOCTYPE html>
<html lang="en">
<?php include('blocks/head.php'); ?>

<body>
    <div class="wrapper">
        <div class="top">
            <?php include('blocks/header.php'); ?>
            <?php include('blocks/nav.php'); ?>
            <?php include('blocks/jumbotron.php'); ?>
            <section class="center1">
                <div class="trending_now">
                    <h3 class="h3_product">Trending now</h3>
                    <ul class="trending_table">
                        <li><a href="#" class="trending_link">Bohemian</a></li>
                        <li><a href="#" class="trending_link">Floral</a></li>
                        <li><a href="#" class="trending_link_x">Lace</a></li>
                    </ul>
                </div>
                <div class="trending_now">
                    <h3 class="h3_products">Size</h3>
                    <div class="checks">
                        <div class="pad_check">
                            <label class="label">
                                <input type="checkbox" class="size1"> XXS
                            </label>
                        </div>
                        <div>
                            <label class="label">
                                <input type="checkbox" class="size1"> XS
                            </label>
                        </div>
                        <div>
                            <label class="label">
                                <input type="checkbox" class="size1"> S
                            </label>
                        </div>
                        <div>
                            <label class="label">
                                <input type="checkbox" class="size1"> M
                            </label>
                        </div>
                        <div>
                            <label class="label">
                                <input type="checkbox" class="size1">L
                            </label>
                        </div>
                        <div>
                            <label class="label">
                                <input type="checkbox" class="size1">XL
                            </label>
                        </div>
                        <div>
                            <label class="label">
                                <input type="checkbox" class="size1"> XXL
                            </label>
                        </div>
                    </div>
                </div>
                <div class="trending_now">
                    <h3 class="h3_products">Price</h3>
                    <input value="0" min="0" max="500" step="5" type="range" class="range" oninput="range()">
                    <div class="price">
                        <div id="demo">$0</div>
                        <div class="max">$500</div>
                    </div>
                </div>
                <div class="sort_name">
                    <div class="flex_inner">
                        <div class="sort_box">
                            <div class="box_text">Sort by</div>
                        </div>
                        <details class="sort_box">
                            <summary class="box_name">Name</summary>
                            <div class="drop_product">
                                <div class="drop_flex_product">
                                    <ul class="drop_ul">
                                        <li><a href="#" class="drop_link">Price</a></li>
                                        <li><a href="#" class="drop_link">Name</a></li>
                                    </ul>
                                </div>
                            </div>
                        </details>
                        <div class="sort_boxes">
                            <div class="box_text">Show</div>
                        </div>
                        <details class="sort_box">
                            <summary class="box_name">09</summary>
                            <div class="drop_product">
                                <div class="drop_flex_product">
                                    <ul class="drop_ul">
                                        <li><a href="#" class="drop_link">10</a></li>
                                        <li><a href="#" class="drop_link">11</a></li>
                                        <li><a href="#" class="drop_link">12</a></li>
                                        <li><a href="#" class="drop_link">13</a></li>
                                        <li><a href="#" class="drop_link">14</a></li>
                                        <li><a href="#" class="drop_link">15</a></li>
                                    </ul>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
            </section>

            <div class="mango_people_product center">
            </div>
            <div class="after_product center">
                <ul class="menu_product">
                    <li><a class="menu_product_link" href=""><i class="fas fa-chevron-left"></i></a></li>
                    <li><a class="menu_product_link menu_product_link-active" href="#">1</a></li>
                    <li><a class="menu_product_link" href="#">2</a></li>
                    <li><a class="menu_product_link" href="#">3</a></li>
                    <li><a class="menu_product_link" href="#">4</a></li>
                    <li><a class="menu_product_link" href="#">5</a></li>
                    <li><a class="menu_product_link" href="#">6</a></li>
                    <li><a class="menu_product_link" href="#">...</a></li>
                    <li><a class="menu_product_link" href="#">20</a></li>
                    <li><a class="menu_product_link arrow_pad " href=""><i class="fas fa-chevron-right"></i></a></li>
                </ul>
                <a href="#">
                    <div class="product_button">View all</div>
                </a>
            </div>
            <div class="black_back center">
                <div class="first_block">
                    <img src="static/img/truck.png" alt="truck" class="black_truck">
                    <h1 class="black_h1">Free delivery</h1>
                    <div class="black_back_text">Worldwide delivery on all. Authorit tively morph next-generation innov
                        tion
                        with extensive models.</div>
                </div>
                <div class="first_block">
                    <img src="static/img/percent.png" alt="truck" class="black_truck">
                    <h1 class="black_h1">Sales & discounts</h1>
                    <div class="black_back_text">Worldwide delivery on all. Authorit tively morph next-generation innov
                        tion
                        with extensive models.</div>
                </div>
                <div class="first_block">
                    <img src="static/img/crown.png" alt="truck" class="black_truck">
                    <h1 class="black_h1">Quality assurance</h1>
                    <div class="black_back_text">Worldwide delivery on all. Authoritively morph next-generation
                        innovtion with extensive models.</div>
                </div>
            </div>
            <?php include('blocks/subscribe.php'); ?>
        </div>
    </div>
    <?php include('blocks/footer.php'); ?>
    <?php include('blocks/scripts.php'); ?>

    <script src="js/catalog.js"></script>
    <script src="js/scripts.php"></script>
    <script src="js/subsc__slider.js"></script>
    <script src="js/cross__delete.js"></script>
    <script src="js/range.js"></script>
    <script src="js/sort.js"></script>
</body>


</html>