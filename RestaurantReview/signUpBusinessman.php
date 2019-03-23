
<?php
require_once('header.php');
?>
<!-- sign up-page -->
<div class="login-page about">
    <img class="login-w3img" src="../RestaurantReview/img/img3.jpg" alt="">
    <div class="container">
        <h3 class="title w3ls-title1">Sign Up to your Customer account</h3>
        <div class="login-agileinfo">
            <form action="../RestaurantReview/createNewBusinessman.php" method="post" name="NewUserForm" onsubmit="return validateForm(this)">   <!-- added PHP sign up form -->
                <input class="agile-ltext" type="text" name="username" placeholder="Username" minlength="5"  required="">
                <input class="agile-ltext" type="email" name="email" placeholder="Your Email" required="">
                <input class="agile-ltext" type="password" name="password" placeholder="Password" minlength="8"  required="">
                <input class="agile-ltext" type="password" name="confirmPassword" placeholder="Confirm Password" minlength="8"  required="">
                <div class="wthreelogin-text">
                    <ul>
                        <li>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>
                                <span> I agree to the terms of service</span>
                            </label>
                        </li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <input type="submit" value="Sign Up">
            </form>
            <p>Already have an account?  <a href="../HTMLfiles-noLongerUsed/loginBusinessman.html"> Login Now!</a></p>
        </div>
    </div>
</div>
<!-- //sign up-page -->
<?php
require_once('footer.php');
?>
