
<!DOCTYPE HTML>
<div>
    <head>
        <title>Restaurant rating page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
        <link href="css/style_image.css" rel="stylesheet" >
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/modal.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/owl.carousel.css" media="all" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.2.3.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/rating.css">
    </head>


    <body>

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
                                <a href="login.html"><i aria-hidden="true" class="fa fa-sign-in"></i> Login</a>
                            </li>
                            <li class="head-dpdn">
                                <a href="signup.html"><i aria-hidden="true" class="fa fa-user-plus"></i> Signup</a>
                            </li>
                            <li class="head-dpdn">
                                <a href="help.html"><i aria-hidden="true" class="fa fa-question-circle"></i> Help</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //header-one -->
            <!-- navigation -->
            <div class="navigation agiletop-nav">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header w3l_logo">
                            <button class="navbar-toggle collapsed navbar-toggle1" data-target="#bs-megadropdown-tabs" data-toggle="collapse" type="button">
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
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurants <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Food type</h6>
                                                    <li><a href="restaurants.html">Breakfast</a></li>
                                                    <li><a href="restaurants.html">Lunch</a></li>
                                                    <li><a href="restaurants.html">Dinner</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Cuisine</h6>
                                                    <li><a href="restaurants.html">Chinese Food</a></li>
                                                    <li><a href="restaurants.html">American Food</a></li>
                                                    <li><a href="restaurants.html">French Food</a></li>
                                                    <li><a href="restaurants.html">Italian Food</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Reservation type</h6>
                                                    <li><a href="restaurants.html">For Single Person</a></li>
                                                    <li><a href="restaurants.html">For Couples</a></li>
                                                    <li><a href="restaurants.html">For Groups</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="reservation.php">Reservations</a></li>
                                <li><a href="contact.html">Contact Us</a></li>


                            </ul>
                        </div>
                        <div class="cart cart box_1">
                            <form action="#" class="last" method="post">
                                <input name="cmd" type="hidden" value="_cart" />
                                <input name="display" type="hidden" value="1" />
                                <button class="w3view-cart" name="submit" type="submit" value=""><i aria-hidden="true" class="fa fa-star"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="banner-text"></div>
    </div>


    <div class="welcome" style="background-color: #f1f1f1;">
        <div class="container">

            <h2 style="margin-top: 20px;">For businessmen to rate restaurants: </h2>
            <div class="user_info" style="min-height: 500px; width:80%; margin: auto;margin-top: -60px">
                <form method="post" action="restaurant_rating.php">
                    <div class="user_detail" style="float: right; text-align: center; width: 70%">
                        <div class="welcome-info">
                            <h5>
                                <div class="centered">
                                    <div class="group">
                                        <input type="text" name="name" required="required"/>
                                        <label for="name">Name</label>
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </h5>
                            <h5>
                                <div class="centered">
                                    <div class="group">
                                        <input type="text" name="date_time" required="required"/>
                                        <label for="name">Date and Time dined</label>
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </h5>
                            <h5>
                                <div class="centered">
                                    <div class="group">
                                        <input type="text" name="party_number" required="required"/>
                                        <label for="name">Party number</label>
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </h5>
                            <h5>
                                <div class="centered">
                                    <div class="group">
                                        <input type="text" name="rating" required="required"/>
                                        <label for="name">Rating</label>
                                        <div class="bar"></div>
                                    </div>
                                </div>
                            </h5>

                            <h5>
                                <div class="centered">
                                    <div class="form-group has-warning has-feedback" style="width: 100%; margin: auto;">
                                        <span>Message to restaurant</span>:<textarea name = "review" class="form-control" rows="4" cols="70"></textarea>
                                    </div>
                                </div>
                            </h5>
                            <h5>
                                <div class="centered">
                                    <div class="form-group has-warning has-feedback" style="width: 100%; margin: auto;">
                                        <span>Additional comments:</span><textarea name = "add_comments" class="form-control" rows="2" cols="70"></textarea>
                                    </div>
                                </div>
                            </h5>
                            <button data-modal-trigger="trigger-demo" class="trigger fa fa-fire  u_pix_btn btn btn-outline-success" style="margin-left: 100px; width: 100px;height: 30px;">Submit</button>
                        </div>
                    </div>
                </form>

    </body>
    <?php
    if($_POST)
    {
        $name = $_POST['name'];
        $date_time = $_POST['date_time'];
        $party_number = $_POST['party_number'];
        $review = $_POST['review'];
        $rating = $_POST['rating'];
        $add_comments = $_POST['add_comments'];

        $conn = new mysqli("localhost", "root", "", "restaurantreview");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO restaurant_review (name, date_time, party_number,  review,  add_comments, rating) VALUE ('$name', '$date_time', '$party_number', '$review', '$add_comments', '$rating')";
//        echo "<meta http-equiv='refresh' content='0'>";

        if ($conn->query($sql) === TRUE) {echo "New record created successfully";}
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</div>
</div>
</div>
<!-- footer -->
<div class="footer agileits-w3layouts">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Group</h3>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Feedbacks</a></li>
                    <li><a href="help.html">Need Help</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>help</h3>
                <ul>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="login.html">Cancel Reservation</a></li>
                    <li><a href="login.html">Report</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Project info</h3>
                <ul>
                    <li><a href="http://www.cs.ucl.ac.uk/1819/a6u/t2/comp0034_web_development/">Moodle page</a></li>
                    <li><a href="https://www.ucl.ac.uk/">About UCL</a></li>
                    <li><a href="#">Project Report</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Other</h3>
                <ul>
                    <li><a href="#">Code</a></li>
                    <li><a href="https://github.com/stevejuUCL/RestaurantReviewsGroupF.git">GitHub page</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</html>

<!---star-->
<script src="js/minicart.js"></script>
<script>
    w3ls.render();
    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;
        if (this.subtotal() > 0) {
            items = this.items();
            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>

