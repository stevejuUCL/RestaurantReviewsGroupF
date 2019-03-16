<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/fontStyle.css" rel="stylesheet"> <!-- font-awesome icons -->
    <link href="css/bsProfileStyle.css" rel="stylesheet" type="text/css">
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="http://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
    <!-- //web-fonts -->
</head>
<style>
    .form-popup {
        display: none;
    }
    h1 {
        padding: 30px;
    }
    h2 {
        padding:15px;
    }
    button {
        background-color: #e24945;
        text-align: center;
        color: white;
    }

</style>
<body>
<!-- banner -->
<div class="banner about-w3bnr">
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
                            <a href="loginSelection.html"><i aria-hidden="true" class="fa fa-sign-in"></i> Login</a>
                        </li>
                        <li class="head-dpdn">
                            <a href="signupSelection.html"><i aria-hidden="true" class="fa fa-user-plus"></i> Signup</a>
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
                        <h1><a href="index.html">Feat<span>Maker Reservations Better</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="active" href="index.html">Home</a></li>
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
                            <li><a href="reservations.html">Reservations</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="cart cart box_1">
                        <form action="#" class="last" method="post">
                            <input name="cmd" type="hidden" value="_cart" />
                            <input name="display" type="hidden" value="1" />
                            <button class="ViewFavoriate" name="submit" type="submit" value=""><i aria-hidden="true" class="fa fa-star"></i></button>
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
        </div>
    </div>
</div>
<!-- //banner -->
<!-- breadcrumb -->
<div class="container">
    <ol class="breadcrumb w3l-crumbs">
        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Sign Up</li>
    </ol>
</div>

<div class="container">
    <h1>My Reservations</h1>
    <br>
    <?php
    require_once 'PHP_Database/phpDatabaseConnection.php';

    // Connect to the database
    $connection = connectToDb();

    // Build the query statement
    $query = "SELECT Restaurant.name, Restaurant.address, reservation.time, reservation.GuestNumber, reservation.ReservationID
              FROM reservation JOIN Restaurant ON Reservation.RestaurantID = Restaurant.restaurantID 
              ORDER BY reservation.time";
              //WHERE businessman.ID = ??

    //echo $query;

    // Execute the query and retrieve the results
    $result = mysqli_query($connection, $query);

    //display results in table form

    ?>


    <table class="table">
        <tr>
            <th>Restaurant</th>
            <th>Address</th>
            <th>Date & Time</th>
            <th>Party</th>
        </tr>

        <?php while ($reservation = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $reservation['name'] ?></td>
                <td><?php echo $reservation['address'] ?></td>
                <td><?php echo $reservation['time'] ?></td>
                <td><?php echo $reservation['GuestNumber'] ?></td>
                <td><button class="btn" onclick="getForm()">Modify</button></td>

                <div class="form-popup" id="ModifyForm">
                    <form class="form-container" method="post" action="ModifyReservation.php">
                        <h2>Change your Reservation</h2>

                        <!--Input reservation ID but set display to hidden to make sure modify correct reservation-->
                        <input type="hidden" name="reservationID" value="<?php echo $reservation['ReservationID'] ?>"

                        <label><b>Date & Time</b></label>
                        <input type="datetime-local" name="time" required>

                        <label><b>Number of people</b></label>
                        <input type="number"  name="GuestNumber" required>

                        <button type="submit" value="">Submit</button>
                        <button type="button" onclick="closeForm()">Close</button>
                    </form>
                </div>
            </tr>
        <?php } ?>
    </table>

    <?php
    // Free the results from memory
    mysqli_free_result($result);

    // Close the connection
    closeDb($connection);
    ?>

</div>

<script>
    function getForm() {
        document.getElementById("ModifyForm").style.display = "block";
    }
    function closeForm() {
        document.getElementById("ModifyForm").style.display = "none";
    }
</script>

<!-- //footer -->
<!-- start-smooth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js" type="text/javascript"></script>
<script src="js/easing.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>
