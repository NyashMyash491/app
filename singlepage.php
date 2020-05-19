<!DOCTYPE html>
<html lang="en">
<?php include('blocks/head.php'); ?>

<body>
    <div class="wrapper">
        <div class="top">
            <?php include('blocks/header.php'); ?>
            <?php include('blocks/nav.php'); ?>
            <?php include('blocks/jumbotron.php'); ?>
            <section class="middle__product">
                <div class="middle__img">
                    <div id="carouselExampleControls" class="carousel slide slidehund" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="static/img/single_page.png" class="d-block w-80" alt="woman_product">
                            </div>
                            <div class="carousel-item">
                                <img src="static/img/single_page.png" class="d-block w-80" alt="woman_product">
                            </div>
                            <div class="carousel-item">
                                <img src="static/img/single_page.png" class="d-block w-80" alt="woman_product">
                            </div>
                        </div>
                        <a class="carousel-control-prev carouselPosition middle__img_flex"
                            href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next carouselPosition middle__img_flex"
                            href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="under__img">
                    <h3 class="under__img__h3">WOMEN COLLECTION</h3>
                    <div class="under__img__h2">Moschino Cheap And Chic</div>
                    <div class="under__img__text">Compellingly actualize fully researched processes before proactive
                        outsourcing.
                        Progressively syndicate collaborative architectures before cutting-edge services.
                        Completely visualize parallel core competencies rather than exceptional portals.
                        <div class="under__img__text__details">
                            <div class="under__img__text__details__material">MATERIAL: <span
                                    class="under__img__text__details__material_option">COTTON</span></div>
                            <div class="under__img__text__details__material">DESIGNER: <span
                                    class="under__img__text__details__material_option">BINBURHAN</span></div>
                        </div>
                        <div class="under__img__price">$561</div>
                    </div>
                </div>
                <div class="chooseOptions center">
                    <div class="variant">
                        <h3 class="chooseOptions__option">CHOOSE COLOR</h3>
                        <select class="optionSelect" name="color">
                            <option value="value1" selected>Red</option>
                            <option value="value2">Blue</option>
                            <option value="value3">Black</option>
                        </select>
                    </div>
                    <div class="variant">
                        <h3 class="chooseOptions__option">CHOOSE SIZE</h3>
                        <select class="optionSelect" name="size">
                            <option value="value1" selected>XXS</option>
                            <option value="value2">XS</option>
                            <option value="value3">S</option>
                            <option value="value3">M</option>
                            <option value="value3">L</option>
                        </select>
                    </div>
                    <div class="variant">
                        <h3 class="chooseOptions__option">QUANTITY</h3>
                        <input class="optionSelect" type="number" value="2">
                    </div>
                </div>
                <div class="but">
                    <a class="under__image__button" href=""><i class="icon-basket button_cart"></i>Add to
                        cart</a>
                </div>
            </section>
            <section>
                <div class="alsoLike">
                    <h3 class="alsoLike_h3">YOU MAY LIKE ALSO</h3>
                </div>
                <div class="alsoLike__product-box center">
                </div>
            </section>
            <?php include('blocks/subscribe.php'); ?>
        </div>
    </div>
    <?php include('blocks/footer.php'); ?>
    <?php include('blocks/scripts.php'); ?>
    <script src="js/subsc__slider.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/single.js"></script>
    <script src="js/cross__delete.js"></script>

</body>

</html>