<?php session_start();
if (!isset($_SESSION["userID"])) {
require_once('header.php');
?>
    <title>Sign Up</title>
    <!-- breadcrumb -->
    <div class="container">
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Sign up</li>
        </ol>
    </div>
    <!-- //breadcrumb -->

    <div>
        <div>
            <br><br><br><br><br>
        </div>
        <div class="container">
            <div class="add-products-row">
                <div class="add-grids">
                    <a href="signUpBusinessman.php">
                        <h4><span>Sign Up<br></span> as a <span>Customer</span></h4>
                        <h5>We prepared wonderful restaurants for you</h5>
                        <h6>Sign up Now <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></h6>
                    </a>
                </div>
                <div class="add-grids add-grids-right">
                    <a href="signUpRestaurant.php">
                        <h4><span>Sign Up<br></span> as a <span>Owner</span></h4>
                        <h5>Better way for business</h5>
                        <h6>Sign up Now <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></h6>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div>
            <br><br><br><br><br>
        </div>
    </div>
    <?php
}else {
    header('Location:index.php');
}
require_once('footer.php');
?>