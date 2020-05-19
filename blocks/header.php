<header class="header center">
    <div class="header_left">
        <a href="index.php" class="logo"><img class="logo_img" src="static/img/logo.png" alt="logo">
            <p class="bran">BRAN</p>
            <p class="d">D</p>
        </a>
    </div>
    <div class="fakebox">
        <input class="header_input" type="text" placeholder="Search for an item...">
        <button class="header_search"><i class="fas fa-search"></i></button>
    </div>

    <div class="header_right">
        <div class="drop_cart">
            <a href="cart.php"><i class="icon-basket header_cart"></i></a>
            <div class="drop_c">
                <div class="drop_flex_c">
                </div>
                <div class="totals_hidden">
                    <strong class="d-block">Общее количество товаров: </strong>
                    <div id="quantity"></div>
                    <hr>
                    <strong class="d-block">Общая стоимость товаров: </strong>
                    <div id="price"></div>
                    <hr>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="myAcc" data-toggle="modal" data-target="#exampleModal">
            My account
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">My account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                    placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Password</label>
                                <input type="password" class="form-control"
                                    id="exampleDropdownFormPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                    <label class="form-check-label" for="dropdownCheck">
                                        Remember me
                                    </label>
                                </div>
                                <a class="" href="#">Forgot password?</a>
                            </div>
                            <button type="submit" class="btn btn-primary buttonsign">Log in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <div class="newPadd">New around here? <a class="" href="#"><u> Sign up</u></a></div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>