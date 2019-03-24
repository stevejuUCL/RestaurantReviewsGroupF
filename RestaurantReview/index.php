<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta content="" name="keywords"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/fontStyle.css" rel="stylesheet"> <!-- font-awesome icons -->
    <link href="css/owl.carousel.css" media="all" rel="stylesheet" type="text/css"/> <!-- Owl-Carousel-CSS -->
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="http://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
    <!-- //web-fonts -->
</head>
<body>
<!-- banner -->
<div class="banner">
    <!-- header -->
    <div class="header">
        <div class="w3ls-header"><!-- header-one -->
            <div class="container">
                <div class="w3ls-header-left">
                    <p>Save your time, and make your reservation better than better!</p>
                </div>
                <div class="w3ls-header-right">
                    <ul>
                        <li class="head-dpdn">
                            <i aria-hidden="true" class="fa fa-phone"></i> Call us: +44 75291 47000
                        </li>
                        <li class="head-dpdn">
                            <a href="logInSelections.php"><i aria-hidden="true" class="fa fa-sign-in"></i> Login</a>
                        </li>
                        <li class="head-dpdn">
                            <a href="logInSelections.php"><i aria-hidden="true" class="fa fa-user-plus"></i> Signup</a>
                        </li>
                        <li class="head-dpdn">
                            <a href="help.php"><i aria-hidden="true" class="fa fa-question-circle"></i> Help</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //header-one -->
        <!-- navigation -->
        <div class="navigation agiletop-nav">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header w3l_logo">
                        <button class="navbar-toggle collapsed navbar-toggle1" data-target="#bs-megadropdown-tabs"
                                data-toggle="collapse" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a href="index.php">Feat<span>Maker Reservations Better</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="active" href="index.php">Home</a></li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurants <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Food type</h6>
                                                <li><a href="restaurants.php">Breakfast</a></li>
                                                <li><a href="restaurants.php">Lunch</a></li>
                                                <li><a href="restaurants.php">Dinner</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Cuisine</h6>
                                                <li><a href="restaurants.php">Chinese Food</a></li>
                                                <li><a href="restaurants.php">American Food</a></li>
                                                <li><a href="restaurants.php">French Food</a></li>
                                                <li><a href="restaurants.php">Italian Food</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Reservation type</h6>
                                                <li><a href="restaurants.php">For Single Person</a></li>
                                                <li><a href="restaurants.php">For Couples</a></li>
                                                <li><a href="restaurants.php">For Groups</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="reservations.php">Reservations</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <form action="#" class="last" method="post">
                            <input name="display" type="hidden" value="1"/>
                            <button class="ViewFavoriate" name="submit" type="submit" value=""><i aria-hidden="true"
                                                                                                  class="fa fa-star"></i>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //navigation -->
    </div>
    <!-- //header-end -->
    <!-- banner-text -->
    <div class="banner-text">
        <div class="container">
            <h2>Make Easy to Find <br> <span>Best Restaurants For you.</span></h2>
            <div class="agileits_search">
                <form action="#" method="post">
                    <input name="Search" placeholder="Search for your restaurant" required="" type="text">
                    <select id="agileinfo_search" name="agileinfo_search" required>
                        <option value="">Choose your location</option>
                        <option value="London">London</option>
                        <option value="Manchester">Manchester</option>
                        <option value="Edinburgh">Edinburgh</option>
                        <option value="Cambridge">Cambridge</option>
                        <option value="Oxford">Oxford</option>
                        <option value="Other">Other places in the UK</option>
                    </select>
                    <input type="submit" value="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- add-products -->
<div class="add-restaurants">
    <div class="container">
        <div class="add-products-row">
            <div class="add-grids">
                <a href="formBusinessman.php">
                    <h4><span>Login here<br></span> if you are a <span>Customer</span></h4>
                    <h5>We prepared wonderful restaurants for you</h5>
                    <h6>Login Now <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></h6>
                </a>
            </div>
            <div class="add-grids add-grids-right">
                <a href="formRestaurant.php">
                    <h4><span>Login here<br></span> if you are a <span>Owner</span></h4>
                    <h5>Better way for business</h5>
                    <h6>Login Now <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></h6>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //add-products -->
<!-- order -->
<div class="wthree-order">
    <div class="container">
        <h3 class="title">How To Make Reservations</h3>
        <p class="w3lsorder-text">Get your calender ready in 4 simple steps.</p>
        <div class="order-agileinfo">
            <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids">
                <div class="order-w3text">
                    <i aria-hidden="true" class="fa fa-cutlery"></i>
                    <h5>Choose <br>Cuisine</h5>
                    <span>1</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids">
                <div class="order-w3text">
                    <i aria-hidden="true" class="fa fa-map"></i>
                    <h5>Search Restaurant</h5>
                    <span>2</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids">
                <div class="order-w3text">
                    <i aria-hidden="true" class="fa fa-file-text"></i>
                    <h5>Leave Information</h5>
                    <span>3</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids">
                <div class="order-w3text">
                    <i aria-hidden="true" class="fa fa-rocket"></i>
                    <h5>Be There <br>on Time</h5>
                    <span>4</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //order -->
<!-- deals -->
<div class="w3agile-deals">
    <div class="container">
        <h3 class="title">Special Services</h3>
        <div class="dealsrow">
            <div class="col-md-6 col-sm-6 deals-grids">
                <div class="deals-left">
                    <i aria-hidden="true" class="fa fa-gbp"></i>
                </div>
                <div class="deals-right">
                    <h4>FREE Reservations</h4>
                    <p>We do not take any charge of you for making a reservation.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-6 deals-grids">
                <div class="deals-left">
                    <i aria-hidden="true" class="fa fa-birthday-cake"></i>
                </div>
                <div class="deals-right">
                    <h4>Birthday Discount</h4>
                    <p>We will have a 20% off discount for any restaurant you reserved in your Birthday!</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-6 deals-grids">
                <div class="deals-left">
                    <i aria-hidden="true" class="fa fa-calendar"></i>
                </div>
                <div class="deals-right">
                    <h4>Reserve long before</h4>
                    <p>You could reserve even several months before the day!</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 col-sm-6 deals-grids">
                <div class="deals-left">
                    <i aria-hidden="true" class="fa fa-times-circle-o"></i>
                </div>
                <div class="deals-right">
                    <h4>Cancel anytime</h4>
                    <p>You could cancel your reservation any time before the real date!</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //deals -->
<!-- dishes -->
<div class="w3agile-spldishes">
    <div class="container">
        <h3 class="title">Top Restaurants</h3>
        <div class="spldishes-agileinfo">
            <div class="col-md-3 spldishes-w3left">
                <h5 class="w3ltitle">Feat Ranking</h5>
                <p>The most popular places you cannot miss, we update our ranking list every single day!</p>
            </div>
            <div class="col-md-9 spldishes-grids">
                <!-- Owl-Carousel -->
                <div class="owl-carousel text-center agileinfo-gallery-row" id="owl-demo">
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g1.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.1</h4>
                            <span>Restaurant NO.1 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g2.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.2</h4>
                            <span>Restaurant NO.2 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g3.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.3</h4>
                            <span>Restaurant NO.3 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g4.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.4</h4>
                            <span>Restaurant NO.4 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g5.jpg"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.5</h4>
                            <span>Restaurant NO.5 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g1.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.6</h4>
                            <span>Restaurant NO.6 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g2.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.7</h4>
                            <span>Restaurant NO.7 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.php">
                        <img alt="" class="lazyOwl" src="img/g3.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.8</h4>
                            <span>Restaurant NO.8 descriptions</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //dishes -->

<?php
require_once('footer.php');
?>


<!-- Owl-Carousel-JavaScript -->
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            items: 3,
            lazyLoad: true,
            autoPlay: true,
            pagination: true,
        });
    });
</script>
<!-- //Owl-Carousel-JavaScript -->
<!-- start-smooth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js" type="text/javascript"></script>
<script src="js/easing.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function () {

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>