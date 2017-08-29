<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\themes\smartshop\SmartshopAsset;
use common\widgets\Alert;

 SmartshopAsset::register($this);
$asset_path = Yii::$app->assetManager->getPublishedUrl('@frontend/themes/smartshop/assets');
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
            <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta  charset="<?= Yii::$app->charset ?>">
        <meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="<?= $asset_path?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- pignose css -->
        <link href="<?= $asset_path?>/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


        <!-- //pignose css -->
        <link href="<?= $asset_path?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="<?= $asset_path?>/js/jquery-2.1.4.min.js"></script>
        <!-- //js -->
        <!-- cart -->
        <script src="<?= $asset_path?>/js/simpleCart.min.js"></script>
        <!-- cart -->
        <!-- for bootstrap working -->
        <script type="text/javascript" src="<?= $asset_path?>/js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
        <script src="<?= $asset_path?>/js/jquery.easing.min.js"></script>
        
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <!-- header -->
        <div class="header">
            <div class="container">
                <ul>
                    <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
                    <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
        </div>
        <!-- //header -->
        <!-- header-bot -->
        <div class="header-bot">
            <div class="container">
                <div class="col-md-3 header-left">
                    <h1><a href="index.html"><img src="<?= $asset_path?>/images/logo3.jpg"></a></h1>
                </div>
                <div class="col-md-6 header-middle">
                    <form>
                        <div class="search">
                            <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Search';
                                    }" required="">
                        </div>
                        <div class="section_room">
                            <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                <option value="null">All categories</option>
                                <option value="null">Electronics</option>     
                                <option value="AX">kids Wear</option>
                                <option value="AX">Men's Wear</option>
                                <option value="AX">Women's Wear</option>
                                <option value="AX">Watches</option>
                            </select>
                        </div>
                        <div class="sear-sub">
                            <input type="submit" value=" ">
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
                <div class="col-md-3 header-right footer-bottom">
                    <ul>
                        <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>

                        </li>
                        <li><a class="fb" href="#"></a></li>
                        <li><a class="twi" href="#"></a></li>
                        <li><a class="insta" href="#"></a></li>
                        <li><a class="you" href="#"></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header-bot -->
        <!-- banner -->
        <div class="ban-top">
            <div class="container">
                <div class="top_nav_left">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav menu__list">
                                    <li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
                                    <li class="dropdown menu__item">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                                    <a href="mens.html"><img src="<?= $asset_path?>/images/woo1.jpg" alt=" "/></a>
                                                </div>
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="mens.html">Clothing</a></li>
                                                        <li><a href="mens.html">Wallets</a></li>
                                                        <li><a href="mens.html">Footwear</a></li>
                                                        <li><a href="mens.html">Watches</a></li>
                                                        <li><a href="mens.html">Accessories</a></li>
                                                        <li><a href="mens.html">Bags</a></li>
                                                        <li><a href="mens.html">Caps & Hats</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="mens.html">Jewellery</a></li>
                                                        <li><a href="mens.html">Sunglasses</a></li>
                                                        <li><a href="mens.html">Perfumes</a></li>
                                                        <li><a href="mens.html">Beauty</a></li>
                                                        <li><a href="mens.html">Shirts</a></li>
                                                        <li><a href="mens.html">Sunglasses</a></li>
                                                        <li><a href="mens.html">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown menu__item">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="womens.html">Clothing</a></li>
                                                        <li><a href="womens.html">Wallets</a></li>
                                                        <li><a href="womens.html">Footwear</a></li>
                                                        <li><a href="womens.html">Watches</a></li>
                                                        <li><a href="womens.html">Accessories</a></li>
                                                        <li><a href="womens.html">Bags</a></li>
                                                        <li><a href="womens.html">Caps & Hats</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3 multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <li><a href="womens.html">Jewellery</a></li>
                                                        <li><a href="womens.html">Sunglasses</a></li>
                                                        <li><a href="womens.html">Perfumes</a></li>
                                                        <li><a href="womens.html">Beauty</a></li>
                                                        <li><a href="womens.html">Shirts</a></li>
                                                        <li><a href="womens.html">Sunglasses</a></li>
                                                        <li><a href="womens.html">Swimwear</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                                    <a href="womens.html"><img src="<?= $asset_path?>/images/woo.jpg" alt=" "/></a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class=" menu__item"><a class="menu__link" href="electronics.html">Electronics</a></li>
                                    <li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>
                                    <li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>	
                </div>
                <div class="top_nav_right">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3> <div class="total">
                                    <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                                    <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                    </div>	
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //banner-top -->
        <!-- banner -->
        <div class="banner-grid">
            <div id="visual">
                <div class="slide-visual">
                    <!-- Slide Image Area (1000 x 424) -->
                    <ul class="slide-group">
                        <li><img class="img-responsive" src="<?= $asset_path?>/images/ba1.jpg" alt="Dummy Image" /></li>
                        <li><img class="img-responsive" src="<?= $asset_path?>/images/ba2.jpg" alt="Dummy Image" /></li>
                        <li><img class="img-responsive" src="<?= $asset_path?>/images/ba3.jpg" alt="Dummy Image" /></li>
                    </ul>

                    <!-- Slide Description Image Area (316 x 328) -->
                    <div class="script-wrap">
                        <ul class="script-group">
                            <li><div class="inner-script"><img class="img-responsive" src="<?= $asset_path?>/images/baa1.jpg" alt="Dummy Image" /></div></li>
                            <li><div class="inner-script"><img class="img-responsive" src="<?= $asset_path?>/images/baa2.jpg" alt="Dummy Image" /></div></li>
                            <li><div class="inner-script"><img class="img-responsive" src="<?= $asset_path?>/images/baa3.jpg" alt="Dummy Image" /></div></li>
                        </ul>
                        <div class="slide-controller">
                            <a href="#" class="btn-prev"><img src="<?= $asset_path?>/images/btn_prev.png" alt="Prev Slide" /></a>
                            <a href="#" class="btn-play"><img src="<?= $asset_path?>/images/btn_play.png" alt="Start Slide" /></a>
                            <a href="#" class="btn-pause"><img src="<?= $asset_path?>/images/btn_pause.png" alt="Pause Slide" /></a>
                            <a href="#" class="btn-next"><img src="<?= $asset_path?>/images/btn_next.png" alt="Next Slide" /></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <script type="text/javascript" src="<?= $asset_path?>/js/pignose.layerslider.js"></script>
            <script type="text/javascript">
                                //<![CDATA[
                                $(window).load(function () {
                                    $('#visual').pignoseLayerSlider({
                                        play: '.btn-play',
                                        pause: '.btn-pause',
                                        next: '.btn-next',
                                        prev: '.btn-prev'
                                    });
                                });
                                //]]>
            </script>

        </div>
        <!-- //banner -->
        <?= $content; ?>

        <div class="coupons">
            <div class="container">
                <div class="coupons-grids text-center">
                    <div class="col-md-3 coupons-gd">
                        <h3>Buy your product in a simple way</h3>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <h4>LOGIN TO YOUR ACCOUNT</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <h4>SELECT YOUR ITEM</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                    </div>
                    <div class="col-md-3 coupons-gd">
                        <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
                        <h4>MAKE PAYMENT</h4>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                            sit amet, consectetur.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="col-md-3 footer-left">
                    <h2><a href="index.html"><img src="<?= $asset_path?>/images/logo3.jpg" alt=" " /></a></h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor
                        sit amet, consectetur, adipisci velit, sed quia non 
                        numquam eius modi tempora incidunt ut labore 
                        et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <div class="col-md-9 footer-right">
                    <div class="col-sm-6 newsleft">
                        <h3>SIGN UP FOR NEWSLETTER !</h3>
                    </div>
                    <div class="col-sm-6 newsright">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Email';}" required="">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="sign-grds">
                        <div class="col-md-4 sign-gd">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="mens.html">Men's Wear</a></li>
                                <li><a href="womens.html">Women's Wear</a></li>
                                <li><a href="electronics.html">Electronics</a></li>
                                <li><a href="codes.html">Short Codes</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4 sign-gd-two">
                            <h4>Store Information</h4>
                            <ul>
                                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
                            </ul>
                        </div>
                        <div class="col-md-4 sign-gd flickr-post">
                            <h4>Flickr Posts</h4>
                            <ul>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b16.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b17.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b18.jpg" alt=" " class="img-responsive" /></a></li>
                                <li><a href="single.html"><img src="<?= $asset_path?>/images/b15.jpg" alt=" " class="img-responsive" /></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
        <!-- //footer -->
        <!-- login -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-bottom">
                                    <h3>Sign up for free</h3>
                                    <form>
                                        <div class="sign-up">
                                            <h4>Email :</h4>
                                            <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';
                                                    }" required="">	
                                        </div>
                                        <div class="sign-up">
                                            <h4>Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';}" required="">

                                        </div>
                                        <div class="sign-up">
                                            <h4>Re-type Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';
                                                    }" required="">

                                        </div>
                                        <div class="sign-up">
                                            <input type="submit" value="REGISTER NOW" >
                                        </div>

                                    </form>
                                </div>
                                <div class="login-right">
                                    <h3>Sign in with your account</h3>
                                    <form>
                                        <div class="sign-in">
                                            <h4>Email :</h4>
                                            <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Type here';
                                                    }" required="">	
                                        </div>
                                        <div class="sign-in">
                                            <h4>Password :</h4>
                                            <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Password';
                                                    }" required="">
                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="single-bottom">
                                            <input type="checkbox"  id="brand" value="">
                                            <label for="brand"><span></span>Remember Me.</label>
                                        </div>
                                        <div class="sign-in">
                                            <input type="submit" value="SIGNIN" >
                                        </div>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login -->
    </body>
</html>

<?php $this->endPage() ?>