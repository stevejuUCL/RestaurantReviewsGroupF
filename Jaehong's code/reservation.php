

<!DOCTYPE HTML>
<html>
<head>
    <title>Red wine</title>
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
        <!-- //navigation -->
    </div>
    <!-- //header-end -->
    <!-- banner-text -->
    <div class="banner-text">

    </div>
</div>

<div class="res_container">


    <!-------------------------------------------Reservation information-------------------------->

    <div class="work-info" style="margin-top: 70px; text-align: center; margin: auto;">
        <h3>Reservation details</h3>
    </div>
    <table id = "customers" style="margin-bottom: 60px; width:80%;margin: auto;">
        <thead>
        <tr><th>NO</th>
            <th>Email</th>
            <th>Date and Time</th>
            <th>Number of guests</th>
            <th>Additional requirements</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php
        $conn = new mysqli("localhost", "root", "", "restaurantreview");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "SELECT * FROM reservation";
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
            $count = 1;
            while ($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $count ?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['time']?></td>
                    <td><?php echo $row['GuestNumber']?></td>
                    <td><?php echo $row['additionalRequest']?></td>
                    <td><a onclick="send_id(this.name);" name = '<?php echo json_encode($row); ?>'> <button data-modal-trigger="trigger-demo" class="trigger fa fa-fire  u_pix_btn btn btn-outline-success" style="margin-left: 50px;" >Edit</button></a>
                    </td>
                    <td><a href="delete.php?id='<?php echo $row['id'];?>'" class="trigger fa fa-fire  u_pix_btn btn btn-outline-success">Delete</a></td>
                </tr>
                <?php $count++;}}?>
    </table>



    <!-------------------------------------------------------------Moral-------------------------------------------------------------------------------->
    <div class="user_info" style="min-height: 300px; width:80%; margin: auto;">
        <div class="user_detail" style="float: right;  margin-top:0px; text-align: center; width: 70%">
            <div class="welcome-info">
                <div data-modal="trigger-demo" class="modal">
                    <article class="content-wrapper">
                        <button class="close"></button>
                        <form method="post" action="reservation.php">
                            <div class="row" style = "text-align:left;">
                                <div class="col-6" style ="margin-top:20px; width: 210px;">
                                    <input type="hidden" class="style9" id = "d0" name="id"  value=" " style="border-radius: 5px; width: 210px; ">
                                    <span>Number of guests:</span><br>
                                    <input type="text" class="style9" id = "d1" name="number"  value=" " style="border-radius: 5px; width: 210px; ">
                                </div>
                                <div class="col-6" style ="margin-top:20px; width: 210px;">
                                    <span>Time:</span><br>
                                    <input type="text" class="style9" id = "d2" name="time" size="100" value=" " style="border-radius: 5px;width: 210px;">
                                </div>
                                <div class="col-6" style ="margin-top:20px;width: 210px;">
                                    <span>Add requirement:</span><br>
<!--                                    <input type="text" class="style9" id = "d3" name="req" value=" " style="border-radius: 8px; width: 210px;">-->
                                    <textarea rows="4" cols="35" type="text" class="style9"  id = "d3" name="req" value=" " style="border-radius: 8px; width: 210px;">
                                </textarea>
                                </div>
                            </div>
                            <footer class="modal-footer">
                                <input type="submit" class="action send_data style9" data-modal-trigger="trigger-1" id = "save" name="save" value="save">
                            </footer>
                        </form>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------------------Modal end -------------------------------------------------------------------------------->
</body>
<?php
if($_POST)
{
    $id = $_POST['id'];
    $number = $_POST['number'];
    $time = $_POST['time'];
    $req = $_POST['req'];


    $conn = new mysqli("localhost", "root", "", "restaurantreview");
    if ($conn->connect_error)
    { die("Connection failed: " . $conn->connect_error);   }

    $sql = "UPDATE reservation SET GuestNumber='$number', time='$time', additionalRequest='$req' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE)
    {
        echo "<meta http-equiv='refresh' content='0'>";
    }


}
?>

<!-- subscribe -->
<div class="subscribe agileits-w3layouts">
    <div class="container">
        <div class="col-md-6 social-icons w3-agile-icons">
            <h4>Keep in touch</h4>
            <ul>
                <li><a class="fa fa-facebook icon facebook" href="#"> </a></li>
                <li><a class="fa fa-twitter icon twitter" href="#"> </a></li>
                <li><a class="fa fa-google-plus icon googleplus" href="#"> </a></li>
                <li><a class="fa fa-weibo icon fa-weibo" href="#"> </a></li>
            </ul>
        </div>
        <div class="col-md-6 subscribe-right">
            <h3 class="w3ls-title">Leave Email for<br><span>Recommendations</span></h3>
            <form action="#" method="post">
                <input name="email" placeholder="Enter your Email..." required="" type="email">
                <input type="submit" value="Send to Feat">
                <div class="clearfix"> </div>
            </form>
            <img alt="" class="sub-w3lsimg" src="img/i1.png"/>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //subscribe -->
<div class="footer">
    <!-- container -->
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h3>About us</h3>
                <ul>
                    <li><a href="codes.html">program</a></li>
                    <li><a href="codes.html">our mission</a></li>
                    <li><a href="codes.html">our service</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="blog.html">Blog</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>Contact us</h3>
                <ul>
                    <li>756 gt globel Place,</li>
                    <li>CD-Road,M 07 435.</li>
                    <li>Telephone: +1 234 567 9871</li>
                    <li>FAX: +1 234 567 9871</li>
                    <li>Email : <a href="mailto:example@email.com">Example@mail.com</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>Social</h3>
                <ul>
                    <li><a href="https://facebook.com/">Facebook</a></li>
                    <li><a href="https://twitter.com/">Twitter</a></li>
                    <li><a href="#">Google +</a></li>
                    <li><a href="#">Rss</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>FAQs</h3>
                <form>
                    <input type="text" placeholder="Email address" required="">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

</html>
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
<script>
    function send_id(name){

        // // var obj =  JSON.parse(name);
        var obj = JSON.parse(name);
        // console.log(obj);
        console.log(obj[3]);
        console.log(obj[4]);
        console.log(obj[7]);
        $('#d0').val(obj[0]);
        $('#d1').val(obj[3]);
        $('#d2').val(obj[4]);
        $('#d3').val(obj[7]);
        // // alert(JSON.parse(id));
        // // // console.log(id);
    }

</script>




