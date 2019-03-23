<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/fontStyle.css" rel="stylesheet"> <!-- font-awesome icons -->
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
    h2 {
        text-align: center;
        padding: 40px;
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
<!-- breadcrumb -->
<div class="container">
    <ol class="breadcrumb w3l-crumbs">
        <li><a href="../HTMLfiles-noLongerUsed/index.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Sign Up</li>
    </ol>
</div>

<?php
require_once('PHP_Database/phpDatabaseConnection.php');

$Username = $_POST['username'] ?? '1'; //PHP 7.0
$email = $_POST['email'] ?? '1';
$password = $_POST['password'] ?? '1';
$confirmPassword = $_POST['confirmPassword'];

//validate confirm password matches password
if ($password == $confirmPassword) {
    $qryCreate = "INSERT INTO restaurant (Username, email, password) VALUES ('" . $Username . "', '" . $email . "', '" . $password . "')";
} else {
    echo "The entered passwords do not match.";
}

$qryFindUsername = "SELECT * FROM restaurant ";
$qryFindUsername .= "WHERE Username = '" . $Username . "'";

$qryFindEmail = "SELECT * FROM restaurant ";
$qryFindEmail .= "WHERE email = '" . $email . "'";

$connection = connectToDb();

//Check if username exists
$resultUsername = mysqli_query($connection, $qryFindUsername);
$resultEmail = mysqli_query($connection, $qryFindEmail);

if (mysqli_num_rows($resultUsername) > 0) {
    ?>
    <h2><?php echo "This username is already registered."; ?> </h2>
    <?php
    mysqli_free_result($resultUsername);
}
else {
    if (mysqli_num_rows($resultEmail) > 0) {
        ?>
        <h2><?php echo "This email is already registered."; ?> </h2>
        <?php
    } else {
        $result = mysqli_query($connection, $qryCreate);

        if ($result) {
            ?><h2><?php echo "New user created successfully."; ?></h2>
            <?php
            closeDb($connection);
        } else {
            echo mysqli_error($connection);
            closeDb($connection);
            exit;
        }
    }
}
?>


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
