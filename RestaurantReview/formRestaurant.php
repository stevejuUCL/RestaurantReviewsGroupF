<?php
require_once('header.php');
?>

<!-- login-page -->
<div class="login-page about">
    <img class="login-w3img" src="../RestaurantReview/img/img3.jpg" alt="">
    <div class="container">
        <h3 class="title w3ls-title1">Login to your Restaurant Owner account</h3>
        <div class="login-agileinfo">
            <form action="logInRestaurant.php" method="post">
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
            <p>Wanna register your restaurant? <a href="signUpRestaurant.php"> Sign Up Now!</a></p>
        </div>
    </div>
</div>
<!-- //login-page -->

<?php
require_once('footer.php');
?>
