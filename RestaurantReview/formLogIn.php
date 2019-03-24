<?php session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["account_type"])) {
    if ($_GET["account_type"] != "businessman" && $_GET["account_type"] != "restaurant") {
//        header('location: logInSelections.php');
        echo $_GET["account_type"] . "something wrong";
    }else {
        require_once('header.php');
        ?>
        <title>Log In</title>
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
                <h3 class="title w3ls-title1">Login to your <?= $_GET["account_type"] ?? "" ?> account</h3>
                <div class="login-agileinfo">
                    <form action="logIn.php" method="post">
                        <input class="agile-ltext" type="text" name="username" placeholder="Username" required="">
                        <input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
                        <input type="hidden" name="userType" value="<?= $_GET["account_type"] ?? "" ?>">
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
    }
}
?>
