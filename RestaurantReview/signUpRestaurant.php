<?php
require_once('header.php');
?>
    <!-- sign up-page -->
    <div class="login-page about">
        <img class="login-w3img" src="img/img3.jpg" alt="">
        <div class="container">
            <h3 class="title w3ls-title1">Sign Up to your Restaurant Owner account</h3>
            <div class="login-agileinfo">
                <form action="createNewRestaurant.php" method="post" onsubmit="return validateForm(this)">
                    <input class="agile-ltext" type="text" name="username" placeholder="Username" required="">
                    <input class="agile-ltext" type="email" name="email" placeholder="Your Email" required="">
                    <input class="agile-ltext" type="password" name="password" placeholder="Password" required="">
                    <input class="agile-ltext" type="password" name="confirmPassword" placeholder="Confirm Password" required="">
                    <div class="wthreelogin-text">
                        <ul>
                            <li>
                                <label class="checkbox"><input type="checkbox" name="checkbox" required><i></i>
                                    <span> I agree to the terms of service</span>
                                </label>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <input type="submit" value="Sign Up">
                </form>
                <p>Already have an account?  <a href="../HTMLfiles-noLongerUsed/loginRestaurantOwner.html"> Login Now!</a></p>
            </div>
        </div>
    </div>
    <!-- //sign up-page -->

<?php
require_once('footer.php');
?>