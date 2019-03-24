
<!DOCTYPE HTML>
<div>
    <head>
        <title>Restaurant account page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
        <link href="css/style_image.css" rel="stylesheet" >
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/modal.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/owl.carousel.css" media="all" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.2.3.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
        <script src="js/bootstrap.js"></script>
    </head>
    <body>

    <div class="banner">
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
                                <a href="login.html"><i aria-hidden="true" class="fa fa-sign-in"></i> Login</a>
                            </li>
                            <li class="head-dpdn">
                                <a href="signup.html"><i aria-hidden="true" class="fa fa-user-plus"></i> Signup</a>
                            </li>
                            <li class="head-dpdn">
                                <a href="help.html"><i aria-hidden="true" class="fa fa-question-circle"></i> Help</a>
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
                            <h1><a href="index.php">Feat<span>Maker Reservations Better</span></a></h1>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="active" href="index.php">Home</a></li>
                                <!-- Mega Menu -->
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Restaurants <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Food type</h6>
                                                    <li><a href="restaurants.html">Breakfast</a></li>
                                                    <li><a href="restaurants.html">Lunch</a></li>
                                                    <li><a href="restaurants.html">Dinner</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Cuisine</h6>
                                                    <li><a href="restaurants.html">Chinese Food</a></li>
                                                    <li><a href="restaurants.html">American Food</a></li>
                                                    <li><a href="restaurants.html">French Food</a></li>
                                                    <li><a href="restaurants.html">Italian Food</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Reservation type</h6>
                                                    <li><a href="restaurants.html">For Single Person</a></li>
                                                    <li><a href="restaurants.html">For Couples</a></li>
                                                    <li><a href="restaurants.html">For Groups</a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="reservation.php">Reservations</a></li>
                                <li><a href="contact.html">Contact Us</a></li>

                                <li><a href="restaurant_account.php">R_acc</a></li>
                                <li><a href="restaurant_profile_View.php">R_pro</a></li>
                                <li><a href="businessman_account.php">B_acc</a></li>
                                <li><a href="businessman_profile_View.php">B_pro</a></li>
                            </ul>
                        </div>
                        <div class="cart cart box_1">
                            <form action="#" class="last" method="post">
                                <input name="cmd" type="hidden" value="_cart" />
                                <input name="display" type="hidden" value="1" />
                                <button class="w3view-cart" name="submit" type="submit" value=""><i aria-hidden="true" class="fa fa-star"></i></button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="banner-text"></div>
    </div>


    <div class="welcome">
        <div class="container">
            <div class="welcome-info" style="width:60%;">
                <h1>Account for Restaurant</h1>

                <div class="user_info" style="min-height: 500px;  margin: auto;">
                    <div class = "user_pic" style="max-height: 300px; border-radius: 50%; margin-top:130px;float: left; width: 30%; color: red;">

                        <!---------------------------------------- Image upload ------------------------------------------------------->
                        <!--------------- -database connect  ---------------------->
                        <?php
                        $conn = new mysqli("localhost", "root", "", "restaurantreview");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        //----------------select image url from database table-------------------
                        $query = "SELECT img_url FROM restaurant";
                        $result = mysqli_query($conn, $query);

                        //--------------- display at the screen uploaded image from database  ------------------
                        while ($row = mysqli_fetch_array($result))
                        {
                            echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['img_url']).'" style="border-radius:50%; margin-bottom;20px;"/>';
                        }
                        ?>

                        <form method="post" enctype="multipart/form-data" >
                            <br>
                            <div><input   type="file" name = "image" id = "image" style="width: 200px; height: 200px; opacity: 0; margin-left: 35px; margin-top: -225px;z-index: 1; cursor: pointer;"/></div><br>
                            <div><button data-modal-trigger="trigger-demo1" class="trigger fa fa-fire  u_pix_btn btn btn-outline-success" name = "insert" id = "insert" style="margin-left: 50px;">Insert</button></div>

                            <br/>
                            <input type="hidden" class="style9" id = "d1" name="name"   value="<?php if(isset($_POST['r_name'])){ echo $r_name;} ?>" style="border-radius: 5px; width: 210px;">
                            <input type="hidden" class="style9" id = "d2" name="open_hour" size="100" value="<?php if(isset($_POST['open_hour'])){ echo $open_hour;} ?>" style="border-radius: 5px;width: 210px;">

                            <input type="hidden" class="style9" id = "d1" name="company_name"  value="<?php if(isset($_POST['reservation_availability'])){ echo $reservation_availability;} ?>"  style="border-radius: 5px;width: 210px;">

                        </form>
                    </div>
                    <!------------------------------------------------------------------------------------------------------------------>
                    <!------------------------------------------User information change------------------------------------------------->
                    <div class="user_detail" style="float: right; text-align: center; width: 70%">
                        <div class="welcome-info" style="width:80%;">
                            <?php

                            $conn = new mysqli("localhost", "root", "", "restaurantreview");
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $query = "SELECT * FROM restaurant";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result))
                            {
                                ?>
                                <h5>Restaurant name:  <?php  echo $row['name']; ?></h5>
                                <h5>email: <?php  echo $row['email']; ?></h5>
                                <h5>Phone number: <?php  echo $row['contactNumber']; ?></h5>
                                <h5>Address:<?php  echo $row['address']; ?></h5>
                                <h5>Open hour:  <?php  echo $row['open_hour']; ?></h5>
                                <h5>User name: <?php  echo $row['username']; ?></h5>
                                <h5>Availability of reservation: <?php echo $row['availability']; ?></h5>
                                <?php
                            }
                            ?>

                            <button data-modal-trigger="trigger-demo" class="trigger fa fa-fire  u_pix_btn btn btn-outline-success" style="margin-left: 60px;">Change</button>
                            <!---------------------------- Modal popup ---------------------------->
                            <div data-modal="trigger-demo" class="modal">
                                <article class="content-wrapper">
                                    <button class="close"></button>
                                    <form method="post" action="restaurant_account.php">
                                        <div class="row" style = "text-align:left;">

                                            <?php

                                            $conn = new mysqli("localhost", "root", "", "redwine");
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $query = "SELECT * FROM restaurant_info";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result))
                                            {
                                                ?>

                                                <div class="col-6" style ="margin-top:20px; width: 210px;">
                                                    <span>Name:</span><br>
                                                    <input type="text" class="style9" id = "d1" name="r_name"  value="<?php  echo $row['name']; ?>" style="border-radius: 5px; width: 210px; ">
                                                </div>
                                                <div class="col-6" style ="margin-top:20px; width: 210px;">
                                                    <span>Opon Hour:</span><br>
                                                    <input type="text" class="style9" id = "d2" name="open_hour" size="100" value="<?php  echo $row['open_hour']; ?>" style="border-radius: 5px;width: 210px;">
                                                </div>
                                                <div class="col-6" style ="margin-top:20px;width: 210px;">
                                                    <span>Availability of reservation:</span><br>
                                                    <input type="text" class="style9" id = "d3" name="reservation_availability" value="<?php echo $row['availability']; ?>" style="border-radius: 8px; width: 210px;">
                                                </div>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                        <footer class="modal-footer">
                                            <input type="submit" class="action send_data style9" data-modal-trigger="trigger-1" id = "save" name="save" value="save">
                                        </footer>
                                    </form>
                                </article>
                            </div>
                        </div>
                    </div>
    </body>
    <?php
    if($_POST)
    {
        $r_name = $_POST['r_name'];
        $open_hour = $_POST['open_hour'];
        $reservation_availability = $_POST['reservation_availability'];

        $conn = new mysqli("localhost", "root", "", "restaurantreview");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //----------------------------------update image url into database table---------------------
        if(isset($_POST["insert"]))
        {
            $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $query = "UPDATE restaurant SET img_url = '$file' WHERE username = 'jackson'";
            mysqli_query($conn, $query);
            {
                echo "<meta http-equiv='refresh' content='0'>";
            }
        }
        //----------------------------------update user information into database table---------------------
        if(isset($_POST["save"]))
        {
            $sql = "UPDATE restaurant SET name='$r_name', open_hour='$open_hour', availability='$reservation_availability' WHERE username='jackson'";
            echo "<meta http-equiv='refresh' content='0'>";

            if ($conn->query($sql) === TRUE) {}
        }
        $conn->close();
    }
    ?>
</div>
</div>
</div>
<!-- footer -->
<div class="footer agileits-w3layouts">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Group</h3>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Feedbacks</a></li>
                    <li><a href="help.html">Need Help</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>help</h3>
                <ul>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="login.html">Cancel Reservation</a></li>
                    <li><a href="login.html">Report</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Project info</h3>
                <ul>
                    <li><a href="http://www.cs.ucl.ac.uk/1819/a6u/t2/comp0034_web_development/">Moodle page</a></li>
                    <li><a href="https://www.ucl.ac.uk/">About UCL</a></li>
                    <li><a href="#">Project Report</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
                <h3>Other</h3>
                <ul>
                    <li><a href="#">Code</a></li>
                    <li><a href="https://github.com/stevejuUCL/RestaurantReviewsGroupF.git">GitHub page</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</html>

<!-------------------------------------modal popup jquery--------------------------->
<script type="text/javascript">
    const buttons = document.querySelectorAll(`button[data-modal-trigger]`);
    for(let button of buttons) {
        modalEvent(button);
    }

    function modalEvent(button) {
        button.addEventListener('click', () => {
            const trigger = button.getAttribute('data-modal-trigger');
            const modal = document.querySelector(`[data-modal=${trigger}]`);
            const contentWrapper = modal.querySelector('.content-wrapper');
            const close = modal.querySelector('.close');

            close.addEventListener('click', () => modal.classList.remove('open'));
            modal.addEventListener('click', () => modal.classList.remove('open'));
            contentWrapper.addEventListener('click', (e) => e.stopPropagation());

            modal.classList.toggle('open');
        });
    }
</script>
<!-------------------------------------insert button onclick event , input the image file from folder --------------------------->
<script type="text/javascript">
    $(document).ready(function(){
        $('#insert').click(function () {
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please select image!");
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
                {
                    alert('invalid image File');
                    $('#image').val('');
                    return false;
                }
            }
        })
    });
</script>
<!---star-->
<script src="js/minicart.js"></script>
<script>
    w3ls.render();
    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;
        if (this.subtotal() > 0) {
            items = this.items();
            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>

