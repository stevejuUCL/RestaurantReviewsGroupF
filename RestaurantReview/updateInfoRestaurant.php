<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');
require_once('header.php');
?>

    <!-- breadcrumb -->
    <title> Your Information </title>
    <div class="container">
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Account</li>
        </ol>
    </div>
    <!-- //breadcrumb -->
    <!-- login-page -->
    <div class="account-page about">
        <img class="login-w3img" src="../RestaurantReview/img/img3.jpg" alt="">
        <div class="container">
            <h3 class="title w3ls-title1">Account Information</h3>
            <div class="account-agileinfo">
                <form action="updateInfo.php" method="post">
                    <input class="agile-ltext" type="hidden" name="userID" value=""
                    <input class="agile-ltext" type="text" name="username" placeholder="Username" required="">
                    <input class="agile-ltext" type="tel" name="contactNumber" placeholder="Tel.no">
                    <input class="agile-ltext" type="text" name="address" placeholder="address">
                    <input class="agile-ltext" type="email" name="email" placeholder="Email" required="">
                    <div class="wthreelogin-text">
                        <ul>
                            <li>
                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>
                                    <span> Remember me </span>
                                </label>
                            </li>
                            <li><a href="#">Forgot password?</a> </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <input type="submit" value="Submit">
                </form>
                <p>Don't have an Account? <a href="signUpBusinessman.php"> Sign Up Now!</a></p>
            </div>
        </div>
    </div>
    <!-- //login-page -->
<?php
require_once('footer.php');
?>