<?php session_start();
require_once('header.php');
?>
<title>Login</title>
<!-- breadcrumb -->
<div class="container">
    <ol class="breadcrumb w3l-crumbs">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Login</li>
    </ol>
</div>
<!-- //breadcrumb -->
<!-- loginSelection Page-->
<div>
    <div>
        <br><br><br><br><br>
    </div>
    <div class="container">
        <h5 class="text-danger"><?php if (isset($_SESSION["success_message"])) {
                echo $_SESSION["success_message"];
                unset($_SESSION["success_message"]);
            }?></h5>
        <div class="add-products-row">
            <div class="add-grids">
                <a href="formLogIn.php?account_type=businessman">
                <h4><span>Login<br></span> as a <span>Customer</span></h4>
                <h5>We prepared wonderful restaurants for you</h5>
                <h6>Login Now <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></h6>
                </a>
            </div>
        <div class="add-grids add-grids-right">
            <a href="formLogIn.php?account_type=restaurant">
            <h4><span>Login<br></span> as a <span>Owner</span></h4>
            <h5>Better way for business</h5>
            <h6>Login Now <i aria-hidden="true" class="fa fa-arrow-circle-right"></i></h6>
            </a>
        </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<div>
    <br><br><br><br><br>
</div>
<!-- //loginSelection Page-->


<?php
require_once('footer.php');
?>
