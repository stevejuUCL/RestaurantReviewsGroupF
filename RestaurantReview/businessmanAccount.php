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

<title>Customer Account</title>
<?php
require_once ("header.php");
?>
<link href="../RestaurantReview/css/lightbox.css" media="all" rel="stylesheet" type="text/css">
<link href="../RestaurantReview/css/homeStyle.css" media="all" rel="stylesheet" type="text/css">
<link href="../RestaurantReview/css/modal.css" media="all" rel="stylesheet" type="text/css">
<link href="../RestaurantReview/css/rating.css" media="all" rel="stylesheet" type="text/css">
<link href="../RestaurantReview/css/style_image.css" media="all" rel="stylesheet" type="text/css">
<div class="welcome">
    <div class="container">
        <div class="welcome-info" style="width:60%;">
            <h1>Account for Businessman</h1>
            <div class="work-info">
                <h3>Reservation details:</h3>
            <?php
            require_once('PHP_Database/phpDatabaseConnection.php');
            $query = "SELECT * FROM reservation_info where id = 1";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result))
            {
                ?>
                <h5>Date and Time:  <?php  echo $row['date_time'] ?></h5>
                <h5>Number of guests: <?php  echo $row['guests_number'] ?></h5>
                <h5>Additional requirement:   <?php  echo $row['add_requirement'] ?></h5>
                <h5>Restaurant Name:   <?php  echo $row['restaurant_name'] ?> </h5>
                <h5>Reservation ID:   <?php  echo $row['reservation_id'] ?> </h5>
                <?php
            }
            ?>

                <div class="work-info">
                    <h3>User Information:</h3>
                </div>
            </div>
        </div>
        <div class="user_info" style="min-height: 500px;  margin: auto;">
            <div class = "user_pic" style="max-height: 300px; border-radius: 50%; margin-top:50px;float: left; width: 30%; color: red;">

                <!---------------------------------------- Image upload ------------------------------------------------------->

                    <!--------------- -database connect  ---------------------->
                    <?php
                    $conn = new mysqli("localhost", "steveju", "stevejuju546", "redwine");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        //----------------select image url from database table-------------------
                        $query = "SELECT img_url FROM userinfo";
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
                        $conn = new mysqli("localhost", "steveju", "stevejuju546", "redwine");
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $query = "SELECT * FROM userinfo";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result))
                        {
                           ?>
                            <h5>Name:  <?php  echo $row['name'] ?></h5>
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
                                    $conn = new mysqli("localhost", "steveju", "stevejuju546", "redwine");
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $query = "SELECT * FROM userinfo";
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
                                            <input type="text" class="style9" id = "d1" name="name"   value="<?php  echo $row['name'] ?>" style="border-radius: 5px; width: 210px;">
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

        <?php
        if($_POST)
                {
                    $email = $_POST['email'];
                    $contact_number = $_POST['contact_number'];
                    $company_name = $_POST['company_name'];
                    $name = $_POST['name'];

                    $conn = new mysqli("localhost", "steveju", "stevejuju546", "redwine");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    //----------------------------------update image url into database table---------------------
                    if(isset($_POST["insert"]))
                    {
                        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                        $query = "UPDATE userinfo SET img_url = '$file' WHERE user_name = 'Jackson'";
                         mysqli_query($conn, $query);
                        {
                            echo "<meta http-equiv='refresh' content='0'>";
                        }
                    }
                    //----------------------------------update user information into database table---------------------
                    if(isset($_POST["save"]))
                    {

                        $sql = "UPDATE userinfo,  SET email='$email', contact_number='$contact_number', name='$name', company_name='$company_name' WHERE user_name='jackson'";
                        echo "<meta http-equiv='refresh' content='0'>";

                        if ($conn->query($sql) === TRUE) {}
                    }
                    $conn->close();
                }
        ?>
        </div>
    </div>
    </div>

<?php
require_once ("footer.php");
?>
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

