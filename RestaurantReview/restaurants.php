<?php
session_start();
if (isset($_SESSION["userID"])) {

require_once('header.php');
?>
<title>Restaurants</title>
<!-- products -->
<div class="products">
    <div class="container">
        <div class="col-md-9 product-w3ls-right">
            <div class="product-top">
                <h4>Restaurant List</h4>
                <ul>

                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="restaurants.php">Breakfast</a></li>
                            <li><a href="restaurants.php">Lunch</a></li>
                            <li><a href="restaurants.php">Dinner</a></li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Food Type<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="restaurants.php">Chinese Food</a></li>
                            <li><a href="restaurants.php">American Food</a></li>
                            <li><a href="restaurants.php">French Food</a></li>
                            <li><a href="restaurants.php">Italian Food</a></li>
                        </ul>
                </ul>
                </li>

                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="products-row">
                <div class="col-xs-6 col-sm-4 product-grids">
                    <div class="flip-container">
                        <div class="flipper agile-products">
                            <div class="front">
                                <img src="../RestaurantReview/img/g6.jpg" class="img-responsive" alt="img">
                                <div class="agile-product-text">
                                    <h5>Restaurant1</h5>
                                </div>
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.1</h4>
                                <p>Restaurant NO.1 descriptions</p>
                                <h6>££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 product-grids">
                    <div class="flip-container">
                        <div class="flipper agile-products">
                            <div class="front">
                                <div class="agile-product-text agile-product-text2">
                                    <h5>Restaurant2</h5>
                                </div>
                                <img src="../RestaurantReview/img/g1.jpg" class="img-responsive" alt="img">
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.2</h4>
                                <p>Restaurant NO.2 descriptions</p>
                                <h6>£££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 product-grids">
                    <div class="flip-container">
                        <div class="flipper agile-products">
                            <div class="front">
                                <img src="../RestaurantReview/img/g3.jpg" class="img-responsive" alt="img">
                                <div class="agile-product-text">
                                    <h5>Restaurant3</h5>
                                </div>
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.3</h4>
                                <p>Restaurant NO.3 descriptions</p>
                                <h6>£</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 product-grids">
                    <div class="flip-container flip-container1">
                        <div class="flipper agile-products">
                            <div class="front">
                                <div class="agile-product-text agile-product-text2">
                                    <h5>Restaurant4</h5>
                                </div>
                                <img src="../RestaurantReview/img/g7.jpg" class="img-responsive" alt="img">
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.4</h4>
                                <p>Restaurant NO.4 descriptions</p>
                                <h6>£££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 product-grids">
                    <div class="flip-container flip-container1">
                        <div class="flipper agile-products">
                            <div class="front">
                                <img src="../RestaurantReview/img/g8.jpg" class="img-responsive" alt="img">
                                <div class="agile-product-text">
                                    <h5>Restaurant5</h5>
                                </div>
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.5</h4>
                                <p>Restaurant NO.5 descriptions</p>
                                <h6>£</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 product-grids">
                    <div class="flip-container">
                        <div class="flipper agile-products">
                            <div class="front">
                                <img src="../RestaurantReview/img/img1.jpg" class="img-responsive" alt="img">
                                <div class="agile-product-text">
                                    <h5>Restaurant6</h5>
                                </div>
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.6</h4>
                                <p>Restaurant NO.6 descriptions</p>
                                <h6>££££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 product-grids">
                    <div class="flip-container">
                        <div class="flipper agile-products">
                            <div class="front">
                                <div class="agile-product-text agile-product-text2">
                                    <h5>Restaurant7</h5>
                                </div>
                                <img src="../RestaurantReview/img/g2.jpg" class="img-responsive" alt="img">
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.7</h4>
                                <p>Restaurant NO.7 descriptions</p>
                                <h6>££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 product-grids">
                    <div class="flip-container">
                        <div class="flipper agile-products">
                            <div class="front">
                                <img src="../RestaurantReview/img/g9.jpg" class="img-responsive" alt="img">
                                <div class="agile-product-text">
                                    <h5>Restaurant8</h5>
                                </div>
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.8</h4>
                                <p>Restaurant NO.8 descriptions</p>
                                <h6>££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 product-grids">
                    <div class="flip-container flip-container1">
                        <div class="flipper agile-products">
                            <div class="front">
                                <div class="agile-product-text agile-product-text2">
                                    <h5>Restaurant9</h5>
                                </div>
                                <img src="../RestaurantReview/img/g5.jpg" class="img-responsive" alt="img">
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.9</h4>
                                <p>Restaurant NO.9 descriptions</p>
                                <h6>£££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 product-grids">
                    <div class="flip-container flip-container1">
                        <div class="flipper agile-products">
                            <div class="front">
                                <img src="../RestaurantReview/img/g4.jpg" class="img-responsive" alt="img">
                                <div class="agile-product-text">
                                    <h5>Restaurant10</h5>
                                </div>
                            </div>
                            <div class="back">
                                <h4>Restaurant NO.10</h4>
                                <p>Restaurant NO.10 descriptions</p>
                                <h6>££</h6>
                                <form action="#" method="post">
                                    <a href="#" data-toggle="modal" data-target="#myModal1">Make a reservation!</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 rsidebar">
            <div class="rsidebar-top">
                <div class="slider-left">
                    <h4>CHOOSE BY Price</h4>
                    <div class="row row1 scroll-pane">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>£</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>££</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>£££</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>££££</label>
                    </div>
                </div>
                <div class="sidebar-row">
                    <h4>By Cuisine</h4>
                    <ul class="faq">
                        <li class="item1"><a href="#">Chinese Food<span
                                        class="glyphicon glyphicon-menu-down"></span></a>
                            <ul>
                                <li class="subitem1"><a href="#">DimSim</a></li>
                                <li class="subitem1"><a href="#">HotPot</a></li>
                                <li class="subitem1"><a href="#">Szechuan</a></li>
                            </ul>
                        </li>
                        <li class="item2"><a href="#">Italian Food<span
                                        class="glyphicon glyphicon-menu-down"></span></a>
                            <ul>
                                <li class="subitem1"><a href="#">Panzanella</a></li>
                                <li class="subitem1"><a href="#">Margherita Pizza </a></li>
                                <li class="subitem1"><a href="#">Panna Cotta</a></li>
                                <li class="subitem1"><a href="#">Corn Cannelloni</a></li>
                            </ul>
                        </li>
                        <li class="item3"><a href="#">American Food<span
                                        class="glyphicon glyphicon-menu-down"></span></a>
                            <ul>
                                <li class="subitem1"><a href="#">Sandwiches</a></li>
                                <li class="subitem1"><a href="#">Hot dog</a></li>
                                <li class="subitem1"><a href="#">Chicken bog</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <!-- script for tabs -->
                    <script type="text/javascript">
                        $(function () {

                            // language=JQuery-CSS
                            let menu_ul = $('.faq > li > ul'),
                                menu_a = $('.faq > li > a');

                            menu_ul.hide();

                            menu_a.click(function (e) {
                                e.preventDefault();
                                if (!$(this).hasClass('active')) {
                                    menu_a.removeClass('active');
                                    menu_ul.filter(':visible').slideUp('normal');
                                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                                } else {
                                    $(this).removeClass('active');
                                    $(this).next().stop(true, true).slideUp('normal');
                                }
                            });

                        });
                    </script>
                    <!-- script for tabs -->

                    <h4>NUMBER OF PEOPLE</h4>
                    <div class="row row1 scroll-pane">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1 - 2</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3 - 5</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>6 - 10</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10+</label>
                    </div>

                    <h4>AVAILABLE TIME</h4>
                    <div class="row row1 scroll-pane">
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>11:00am to 2:00pm</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>5:00pm to 8:30pm</label>
                        <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10:00pm to 1:00am</label>
                    </div>
                </div>
            </div>
            <div class="related-row">
                <h4>People Also Search</h4>
                <ul>
                    <li><a href="restaurants.php">Salads</a></li>
                    <li><a href="restaurants.php">Vegetarian</a></li>
                    <li><a href="restaurants.php">Dinner</a></li>
                    <li><a href="restaurants.php">Korean Food</a></li>
                    <li><a href="restaurants.php">Japanese Food</a></li>
                    <li><a href="restaurants.php">Vietnam Food</a></li>
                    <li><a href="restaurants.php">Breakfast</a></li>
                    <li><a href="restaurants.php">Meals</a></li>
                </ul>
            </div>
            <div class="related-row">
                <h4>Desert for today!</h4>
                <div class="galry-like">
                    <a href="#" data-toggle="modal" data-target="#myModal1"><img src="../RestaurantReview/img/s1.jpg" class="img-responsive" alt="img"></a>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //products -->
<div class="container">
    <div class="w3agile-deals prds-w3text">
        <h5>This Website was made by Group F - Zhengqi Zhu(Steve JU)</h5>
    </div>
</div>

<!-- modal -->
<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="col-md-5 modal_body_left">
                        <img src="../RestaurantReview/img/s1.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="col-md-7 modal_body_right single-top-right">
                        <h3 class="item_name">Resaurant name</h3>
                        <p>Some descriptions</p>
                        <div class="single-rating">
                            <ul>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li class="w3act"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li class="rating">** reviews</li>
                                <li><a href="#">Add your review</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <select id="" name="time_choose" required>
                                    <option value="">Choose your time</option>
                                    <option value="05:30pm">05:30pm</option>
                                    <option value="06:00pm">06:00pm</option>
                                    <option value="06:30pm">06:30pm</option>
                                    <option value="07:00pm">07:00pm</option>
                                    <option value="07:30pm">07:30pm</option>
                                    <option value="08:00pm">08:00pm</option>
                                    <option value="08:30pm">08:00pm</option>
                                    <option value="09:00pm">09:00pm</option>
                                    <option value="09:30pm">09:30pm</option>
                                    <option value="10:00pm">10:00pm</option>
                                    <option value="10:30pm">10:30pm</option>
                                    <option value="11:00pm">11:00pm</option>
                                </select>
                                <select id="" name="people_choose" required>
                                    <option value="">Choose table size</option>
                                    <option value="tableFor1">table for 1</option>
                                    <option value="tableFor2">table for 2</option>
                                    <option value="tableFor3">table for 3</option>
                                    <option value="tableFor4">table for 4</option>
                                    <option value="tableFor5-8">table for 5-8</option>
                                    <option value="tableFor9-10">table for 9-10</option>
                                    <option value="tableFor10+">table for 10+</option>
                                </select>
                            </ul>
                        </div>
                        <br><br>
                        <a href="#" class="w3ls-favorite w3ls-favoriate-like"> Make a reservation</a>
                        <div class="single-page-icons social-icons">
                            <ul>
                                <li><h4>Share on</h4></li>
                                <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //modal -->

<div><br><br><br><br><br></div>
    <?php
    require_once('footer.php');}
else {
    header('location:logInSelections.php');
}
?>