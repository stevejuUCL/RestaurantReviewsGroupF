<?php session_start();
require_once('header.php');
?>
<!-- sign up-page -->

<div class="login-page about">
    <img class="login-w3img" src="../RestaurantReview/img/img3.jpg" alt="">
    <div class="container">
        <h3 class="w3ls-title w3ls-title1">Sign Up to your Customer account</h3>

        <div class="login-agileinfo">
            <h5 class="text-danger"><?php if (isset($_SESSION["error_message"])) {
                    echo $_SESSION["error_message"];
                    unset($_SESSION["error_message"]);
                }?></h5>
            <form action="../RestaurantReview/createNewUser.php" method="post" name="NewUserForm" onsubmit="return validateForm(this)">   <!-- added PHP sign up form -->
                <input class="agile-ltext" type="text" name="username" placeholder="Username" minlength="5"  required="">
                <input class="agile-ltext" type="email" name="email" placeholder="Your Email" required="">
                <input class="agile-ltext" type="password" name="password" placeholder="Password" minlength="8"  required="">
                <input class="agile-ltext" type="password" name="confirmPassword" placeholder="Confirm Password" minlength="8"  required="">
                <input class="agile-ltext" type="hidden" name="userType" value="businessman">
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
                <button type="submit" name="submit_button" value="businessman">Submit</button>
            </form>
            <p>Already have an account?  <a href="../HTMLfiles-noLongerUsed/loginBusinessman.html"> Login Now!</a></p>
        </div>
    </div>
</div>
<!-- //sign up-page -->

<!-- validate user input to signup form -->
<script type="text/javascript">

    //check that password contains 1 uppercase, lowercase and number.
    function checkPassword(str)
    {
        var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
        return re.test(str);
    }

    //validate the form before submitting.
    function validateForm(form)
    {
        if(form.username.value === "") {
            alert("Username cannot be blank.");
            form.username.focus();
            return false;
        }
        re = /^\w+$/;
        if(!re.test(form.username.value)) {
            alert("Username must contain only letters, numbers and underscores.");
            form.username.focus();
            return false;
        }
        if(form.password.value !== "" && form.password.value === form.confirmPassword.value) {
            if(!checkPassword(form.password.value)) {
                alert("Invalid password: must contain at least 1 number. 1 uppercase and 1 lowercase letter.");
                form.password.focus();
                return false;
            }
        } else {
            alert("Please check that you've entered and confirmed your password.");
            form.password.focus();
            return false;
        }
        return true;
    }

<?php
require_once('footer.php');
?>
