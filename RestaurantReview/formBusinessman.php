<title>Login</title>
<?php
require_once('header.php');
?>
<!-- breadcrumb -->
<div class="container">
    <ol class="breadcrumb w3l-crumbs">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Login</li>
    </ol>
</div>
<!-- //breadcrumb -->
<!-- login-page -->
<div class="login-page about">
    <img class="login-w3img" src="../RestaurantReview/img/img3.jpg" alt="">
    <div class="container">
        <h3 class="title w3ls-title1">Login to your Customer account</h3>
        <div class="login-agileinfo">
            <form action="businessmanLogin.php" method="post">
                <input class="agile-ltext" type="text" name="Username" placeholder="Username" required="">
                <input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
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
                <input type="submit" value="LOGIN">
            </form>
            <p>Don't have an Account? <a href="signUpBusinessman.php"> Sign Up Now!</a></p>
        </div>
    </div>
</div>
<!-- //login-page -->

<?php
require_once('footer.php');
?>
