<!---------------------------confirm the value with post method-----evert value(in the  inputbox )----------------->
<?php
if(isset($_POST['email'])){
    $userinfo_email =$_POST['email'];
}
if(isset($_POST['contact_number'])){
    $userinfo_contact_number =$_POST['contact_number'];
}
if(isset($_POST['name'])){
    $userinfo_name =$_POST['name'];
}
if(isset($_POST['company_name'])){
    $userinfo_company_name =$_POST['company_name'];
}
?>
<!DOCTYPE HTML>
<div>
<head>
    <title>Businessman account page</title>
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
            <h1>Account for Businessman</h1>
            <div class="work-info">
                <h3>Reservation details:</h3>
            <?php
            $conn = new mysqli("localhost", "root", "", "restaurantreview");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $query = "SELECT * FROM reservation where id = 1";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result))
            {
                ?>
                <h5>Date and Time:  <?php  echo $row['time'] ?></h5>
                <h5>Number of guests: <?php  echo $row['GuestNumber'] ?></h5>
                <h5>Additional requirement:   <?php  echo $row['additionalRequest'] ?></h5>
                <h5>Restaurant Name:   <?php  echo $row['restaurant_name'] ?> </h5>
                <h5>Reservation ID:   <?php  echo $row['ReservationID'] ?> </h5>
                <?php
            }
            ?>

            <div class="work-info">
                <h3>User Information:</h3>
            </div>
        </div>
        <div class="user_info" style="min-height: 500px;  margin: auto;">
            <div class = "user_pic" style="max-height: 300px; border-radius: 50%; margin-top:50px;float: left; width: 30%; color: red;">

                <!---------------------------------------- Image upload ------------------------------------------------------->

                    <!--------------- -database connect  ---------------------->
                    <?php
                    $conn = new mysqli("localhost", "root", "", "restaurantreview");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        //----------------select image url from database table-------------------
                        $query = "SELECT img_url FROM users WHERE username = 'jackson'";
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
                        <input type="hidden" class="style9" id = "d1" name="email"  value=" <?php if(isset($_POST['email'])){ echo $userinfo_email;} ?>" style="border-radius: 5px; width: 210px; ">
                        <input type="hidden" class="style9" id = "d2" name="contact_number" size="100" value="<?php if(isset($_POST['contact_number'])){ echo $userinfo_contact_number;} ?>" style="border-radius: 5px;width: 210px;">
                        <input type="hidden" class="style9" id = "d1" name="name"   value="<?php if(isset($_POST['name'])){ echo $userinfo_name;} ?>" style="border-radius: 5px; width: 210px;">
                        <input type="hidden" class="style9" id = "d1" name="company_name"  value="<?php if(isset($_POST['company_name'])){ echo $userinfo_company_name;} ?>"  style="border-radius: 5px;width: 210px;">

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

                        $query = "SELECT * FROM users WHERE username = 'jackson'";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result))
                        {
                           ?>
                            <h5>Name:  <?php  echo $row['username'] ?></h5>
                            <h5>Username: Jackson</h5>
                            <h5>Email:   <?php  echo $row['email'] ?></h5>
                            <h5>Company Name:   <?php  echo $row['company_name'] ?> </h5>
                            <h5>Contact Number: <?php  echo $row['contact_number'] ?> </h5>
                        <?php
                        }
                    ?>

                    <button data-modal-trigger="trigger-demo" class="trigger fa fa-fire  u_pix_btn btn btn-outline-success" style="margin-left: 60px;">Change</button>
                    <!---------------------------- Modal popup ---------------------------->
                    <div data-modal="trigger-demo" class="modal">
                        <article class="content-wrapper">
                            <button class="close"></button>
                            <form method="post" action="businessman_account.php">
                                <div class="row" style = "text-align:left;">

                                    <?php
                                    $conn = new mysqli("localhost", "root", "", "restaurantreview");
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $query = "SELECT * FROM users WHERE username = 'jackson'";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result))
                                    {
                                        ?>
                                        <div class="col-6" style ="margin-top:20px; width: 210px;">
                                            <span>Email:</span><br>
                                            <input type="text" class="style9" id = "d1" name="email"  value="<?php  echo $row['email'] ?>" style="border-radius: 5px; width: 210px; ">
                                        </div>
                                        <div class="col-6" style ="margin-top:20px; width: 210px;">
                                            <span>Contact number:</span><br>
                                            <input type="number" class="style9" id = "d2" name="contact_number" size="100" value="<?php  echo $row['contact_number'] ?>" style="border-radius: 5px;width: 210px;">
                                        </div>
                                        <div class="col-6" style ="margin-top:20px;width: 210px;">
                                            <span>Name:</span><br>
                                            <input type="text" class="style9" id = "d1" name="name"   value="<?php  echo $row['username'] ?>" style="border-radius: 5px; width: 210px;">
                                        </div>
                                        <div class="col-6" style ="margin-top:20px; width: 210px;">
                                            <span>Company Name:</span><br>
                                            <input type="text" class="style9" id = "d1" name="company_name"  value="<?php  echo $row['company_name'] ?>"  style="border-radius: 5px;width: 210px;">
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
                    $email = $_POST['email'];
                    $contact_number = $_POST['contact_number'];
                    $company_name = $_POST['company_name'];
                    $name = $_POST['name'];

                    $conn = new mysqli("localhost", "root", "", "restaurantreview");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    //----------------------------------update image url into database table---------------------
                    if(isset($_POST["insert"]))
                    {
                        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                        $query = "UPDATE users SET img_url = '$file' WHERE username = 'Jackson'";
                         mysqli_query($conn, $query);
                        {
                            echo "<meta http-equiv='refresh' content='0'>";
                        }
                    }
                    //----------------------------------update user information into database table---------------------
                    if(isset($_POST["save"]))
                    {

                        $sql = "UPDATE users,  SET email='$email', contact_number='$contact_number', username='$name', company_name='$company_name' WHERE user_name='jackson'";
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
                alert("Please select image");
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

