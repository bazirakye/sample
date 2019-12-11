 <body>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
    <!-- Begin Header Area -->
            <header>
                <!-- Begin Header Top Area -->
                <div id="myAlert" style="display:none" class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(document).ready(function () {
            // If not 'Confirmed', show #myAlert
            if (sessionStorage.Alert !== 'Confirmed') {
                $('#myAlert').show();
            }
        });

        $('#myAlert .close').click(function () {
            // Set 'Alert' to 'Confirmed' when user click the close button
            sessionStorage.Alert = "Confirmed";
            $(this).closest('#myAlert').hide();
        });
    });
</script>
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="#">(+256) 0800 345 354</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class="ht-setting-trigger"><span>Hi, Username </span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                    <li><a href="login-register.html">My Account</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="login-register.html">Sign In</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class="currency-selector-wrapper">Currency :</span>
                                            <div class="ht-currency-trigger"><span>Ugx </span></div>
                                            <div class="currency ht-currency">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">USD $</a></li>
                                                    <li class="active"><a href="#">Ugx </a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">Qiuck Links</span>
                                            <div class="ht-language-trigger"><span>Help</span></div>
                                            <div class="language ht-language">
                                                <ul class="">
                                                    <li><span><a href="#">Help</a></span></li>
                                                    <li><span><a href="#">Legal Notice</a></span></li>
                                                    <li><span><a href="#">Contact us</a></span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.html">
                                        <img src="{{asset('user/images/menu/logo/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <select class="nice-select select-search-category">
                                        <option value="0">All categories</option>
                                        <option value="1">--Category one--</option>
                                        <option value="2">--Category two--</option>
                                        <option value="3">--Category three--</option>
                                        <option value="4">--Category four--</option>
                                        <option value="5">--Category five--</option>
                                        <option value="6">--Category six--</option>
                                        <option value="7">--Category seven--</option>
                                        <option value="8">--Category eight--</option>
                                        <option value="9">--Category nine--</optio>
                                    </select>
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist" data-toggle="tooltip" title="View wishlist">
                                            <a href="wishlist.html">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger" data-toggle="tooltip" title="My cart">
                                                <span class="item-icon"></span>
                                                <span class="item-text">Ugx 160
                                                    <span class="cart-item-count">2</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="{{asset('user/images/product/small-size/3.jpg')}}" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>Ugx 80 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="{{asset('user/images/product/small-size/4.jpg')}}" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="single-product.html">Aenean eu tristique</a></h6>
                                                            <span>Ugx 80 x 1</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                                <p class="minicart-total">SUBTOTAL: <span>Ugx 160</span></p>
                                                <div class="minicart-button">
                                                    <a href="checkout.html" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <a href="checkout.html" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu hb-menu-2 d-xl-block">
                                    <nav>
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li class="megamenu-holder"><a href="#">Menu</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="#">sub-menu</a>
                                                        <ul>
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>                       
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">sub-menu</a>
                                                        <ul>
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="single-product.html">sub-menu</a>
                                                        <ul>
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-holder"><a href="#">menu</a>
                                                <ul class="hb-dropdown">
                                                    <li class="sub-dropdown-holder"><a href="#">sub-menu</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="#">Menu</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="#">sub-menu</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="#">sub menu</a>
                                                        <ul class="hb-dropdown hb-sub-dropdown">
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-static-holder"><a href="#">menu</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="#">sub-menu</a>
                                                        <ul>
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">sub-menu</a>
                                                        <ul>
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.html">sub menu</a>
                                                        <ul>
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">sub menu 2</a>
                                                        <ul>
                                                            <li><a href="#">sub-menu-1</a></li>
                                                            <li><a href="#">sub-menu-2</a></li>
                                                            <li><a href="#">sub-menu-3</a></li>
                                                            <li><a href="#">sub-menu-4</a></li>
                                                            <li><a href="#">sub-menu-5</a></li>
                                                            <li><a href="#">sub-menu-6</a></li>
                                                            <li><a href="#">sub-menu-7</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <!-- Begin Header Bottom Menu Information Area -->
                                            <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                                <span>725 Muni University, Arua - West Nile, Uganda</span>
                                            </li>
                                            <!-- Header Bottom Menu Information Area End Here -->
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->