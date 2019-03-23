<?php
require_once('header.php');
?>
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
<div class="add-products">
    <div class="container">
        <div class="add-products-row">
            <div class="w3ls-add-grids">
                <a href="loginBusinessman.html">
                    <h4><span>Login here<br></span> if you are a <span>Customer</span></h4>
                    <h5>We prepared wonderful restaurants for you</h5>
                    <h6>Login Now <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></h6>
                </a>
            </div>
            <div class="w3ls-add-grids w3ls-add-grids-right">
                <a href="loginRestaurantOwner.html">
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
        <h3 class="w3ls-title">How To Make Reservations</h3>
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
        <h3 class="w3ls-title">Special Services</h3>
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
        <h3 class="w3ls-title">Top Restaurants</h3>
        <div class="spldishes-agileinfo">
            <div class="col-md-3 spldishes-w3left">
                <h5 class="w3ltitle">Feat Ranking</h5>
                <p>The most popular places you cannot miss, we update our ranking list every single day!</p>
            </div>
            <div class="col-md-9 spldishes-grids">
                <!-- Owl-Carousel -->
                <div class="owl-carousel text-center agileinfo-gallery-row" id="owl-demo">
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g1.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.1</h4>
                            <span>Restaurant NO.1 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g2.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.2</h4>
                            <span>Restaurant NO.2 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g3.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.3</h4>
                            <span>Restaurant NO.3 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g4.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.4</h4>
                            <span>Restaurant NO.4 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g5.jpg"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.5</h4>
                            <span>Restaurant NO.5 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g1.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.6</h4>
                            <span>Restaurant NO.6 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g2.jpg" title="Our latest gallery"/>
                        <div class="agile-dish-caption">
                            <h4>Restaurant NO.7</h4>
                            <span>Restaurant NO.7 descriptions</span>
                        </div>
                    </a>
                    <a class="item g1" href="restaurants.html">
                        <img alt="" class="lazyOwl" src="../RestaurantReview/img/g3.jpg" title="Our latest gallery"/>
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
