<?php
session_start();
include_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservations</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="" name="keywords" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/fontStyle.css" rel="stylesheet"> <!-- font-awesome icons -->
    <!-- //Custom Theme files -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- web-fonts -->
    <link href="http://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //web-fonts -->
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
</head>
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
                            <a href="../HTMLfiles-noLongerUsed/loginSelection.html"><i aria-hidden="true" class="fa fa-sign-in"></i> Login</a>
                        </li>
                        <li class="head-dpdn">
                            <a href="../HTMLfiles-noLongerUsed/signupSelection.html"><i aria-hidden="true" class="fa fa-user-plus"></i> Signup</a>
                        </li>
                        <li class="head-dpdn">
                            <a href="../HTMLfiles-noLongerUsed/help.html"><i aria-hidden="true" class="fa fa-question-circle"></i> Help</a>
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
                        <h1><a href="../HTMLfiles-noLongerUsed/index.html">Feat<span>Maker Reservations Better</span></a></h1>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="active" href="../HTMLfiles-noLongerUsed/index.html">Home</a></li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurants <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Food type</h6>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">Breakfast</a></li>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">Lunch</a></li>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">Dinner</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Cuisine</h6>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">Chinese Food</a></li>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">American Food</a></li>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">French Food</a></li>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">Italian Food</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Reservation type</h6>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">For Single Person</a></li>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">For Couples</a></li>
                                                <li><a href="../HTMLfiles-noLongerUsed/restaurants.html">For Groups</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="../HTMLfiles-noLongerUsed/reservations.html">Reservations</a></li>
                            <li><a href="../HTMLfiles-noLongerUsed/contact.html">Contact Us</a></li>
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


<section class="innerpage-wrapper">
    <div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="dashboard-heading text-center">
                        <h1>Reservations</h1>
                        <p>All your booking with us will be managed here!</p>
                    </div><!-- end dashboard-heading -->
                    <div class="dashboard-wrapper">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-restaurant">
                                <h2 class="dash-content-title">Restaurants You have Booked!</h2>
                                <div class="table-responsive">
                                    <?php
                                    $sql = 'select r.*, rs.name, b.name as bname, b.email, b.contactnumber from reservations r join businessman b on r.BusinessmanID = b.businessmanID join restaurant rs on r.RestaurantID = rs.RestaurantID where r.BusinessmanID = "'.$_SESSION['user'].'" and r.Reservation_status = "Active" order by time ASC';
                                    $query = mysqli_query($connection, $sql);
                                    ?>
                                    <?php
                                    if ($query && mysqli_num_rows($query)) {
                                        ?>
                                        <table class="table table-hover">
                                            <tbody>
                                    <?php
                                        while ($reservation = mysqli_fetch_array($query)):
                                            ?>
                                            <tr>
                                                <td class="dash-list-icon booking-list-date">
                                                    <div class="b-date">
                                                        <h3><?= date("d", strtotime($reservation['time'])) ?></h3>
                                                        <p><?= date("F", strtotime($reservation['time'])) ?></p>
                                                    </div>
                                                </td>
                                                <td class="dash-list-text booking-list-detail">
                                                    <h3><?= $reservation['name'] ?></h3>
                                                    <ul class="list-unstyled booking-info">
                                                        <li><span>Booking Date:</span> <?= date("d.m.Y", strtotime($reservation['Reservation_date'])) ?> at <?= date("h:i a", strtotime($reservation['Reservation_date'])) ?></li>
                                                        <li><span>Booking Details:</span> <?= $reservation['GuestNumber'] ?> People</li>
                                                        <li><span>Client:</span> <?= $reservation['bname'] ?><span class="line">|</span><?= $reservation['email'] ?><span class="line">|</span><?= $reservation['contactnumber'] ?></li>
                                                    </ul>

                                                    <button class="btn btn-warning edit-resv" data-resv="<?= $reservation['ReservationID'] ?>" data-toggle="modal" data-target="#editform<?= $reservation['ReservationID'] ?>">Edit</button>

                                                    <div id="editform<?= $reservation['ReservationID'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <form action="editReservation.php" method="post">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Change your plan</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="revid" value="<?= $reservation['ReservationID'] ?>">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="time<?= $reservation['ReservationID'] ?>">Change the time:</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="time<?= $reservation['ReservationID'] ?>" name="time<?= $reservation['ReservationID'] ?>" value="<?= date("Y-m-d H:i:s", strtotime($reservation['Reservation_date'])) ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="guest<?= $reservation['ReservationID'] ?>">Change the number of guest:</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="number" class="form-control" id="guest<?= $reservation['ReservationID'] ?>" name="guest<?= $reservation['ReservationID'] ?>" value="<?= $reservation['GuestNumber'] ?>">
                                                                            </div>
                                                                        </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dash-list-btn">
                                                    <form method="post" action="cancelReservation.php">
                                                        <input type="hidden" value="<?= $reservation['ReservationID'] ?>" name="revid">
                                                        <button class="btn btn-danger cancel-resv" data-resv="" type="submit">Cancel</button>
                                                    </form>

                                                </td>
                                            </tr>
                                            <?php
                                        endwhile;
                                        ?>
                                            </tbody>
                                        </table>
                                    <?php
                                    } else {
                                        echo '<h3>You didn\'t book yet!</h3>';
                                    }
                                    ?>
                                </div><!-- end table-responsive -->
                            </div><!-- end booking-listings -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end dashboard-wrapper -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->



<!-- subscribe -->
<div class="subscribe agileits-w3layouts">
    <div class="container">
        <div class="col-md-6 social-icons w3-agile-icons">
            <h4>Keep in touch</h4>
            <ul>
                <li><a class="fa fa-facebook icon facebook" href="#"> </a></li>
                <li><a class="fa fa-twitter icon twitter" href="#"> </a></li>
                <li><a class="fa fa-google-plus icon googleplus" href="#"> </a></li>
                <li><a class="fa fa-weibo icon fa-weibo" href="#"> </a></li>
            </ul>
        </div>
        <div class="col-md-6 subscribe-right">
            <h3 class="w3ls-title">Leave Email for<br><span>Recommendations</span></h3>
            <form action="#" method="post">
                <input name="email" placeholder="Enter your Email..." required="" type="email">
                <input type="submit" value="Send to Feat">
                <div class="clearfix"> </div>
            </form>
            <img alt="" class="sub-w3lsimg" src="img/i1.png"/>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //subscribe -->
<!-- footer -->
<div class="footer agileits-w3layouts">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Group</h3>
                <ul>
                    <li><a href="../HTMLfiles-noLongerUsed/about.html">About Us</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/contact.html">Contact Us</a></li>
                    <li><a href="#">Feedbacks</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/help.html">Need Help</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>help</h3>
                <ul>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/loginBusinessman.html">Cancel Reservation</a></li>
                    <li><a href="../HTMLfiles-noLongerUsed/loginBusinessman.html">Report</a></li>
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
        $(".edit-resv").click(function() {
            $(this).closest("tr").toggleClass('editing');
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