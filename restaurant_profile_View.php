<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Profile</title>

    <style>
        body {
            background: linear-gradient(135deg, #3023AE, #C86DD7);
            background-attachment: fixed;
            font-size: 15px;
            font-family: "Helvetica Neue", Helvetica, Microsoft Yahei;
        }

        .panel {
            margin: 120px auto 60px;
            text-align: center;
            background-color: white;
            width: 500px;
            border-radius: 10px;
            padding: 1px;
            transition: box-shadow .30s;
        }
        .panel:hover{
            box-shadow: #fff 5px 5px 25px;
        }
        .avatar img {
            width: 120px;
            height: 120px;
            border-radius: 60px;
            margin-top: -60px;
        }
        .btn {
            color: white;
            background: rgb(48, 35, 174);
            font-size: 16px;
            line-height: 38px;
            height: 38px;
            padding: 0 20px;
            border-radius: 3px;
            display: inline-block;
            text-decoration: none;
            transition: background .15s;
        }
        .btn:hover {
            background-color: rgb(81, 67, 224);
        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }
        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }
        /* Full-width input fields */
        .form-container input[type=text] {
            width: 80%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }
        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus {
            background-color: #ddd;
            outline: none;
        }
        /* Set a style for the submit/login button */
        .form-container .btn2 {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 80%;
            margin-bottom:10px;
            opacity: 0.8;
        }
        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn2:hover, .btn:hover {
            opacity: 1;
        }
        p.a {
            font-family: "Times New Roman", Times, serif;
            font-size: 20px;
        }

    </style>

</head>
<body>
<section class="panel" style="font-family: "Times New Roman", Times, serif;">
    <p class="avatar" >
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
    </p>
<!--    <p class="a">Restaurant Profile:</p>-->
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
        <div style=" width:60%; margin:auto; text-align: left">
            <p class="a">Restaurant name:  <?php  echo $row['name']; ?></p>
            <p class="a">email: <?php  echo $row['email']; ?></p>
            <p class="a">Contact number: <?php  echo $row['contactNumber']; ?></p>
            <p class="a">Address: <?php  echo $row['address']; ?></p>
            <p class="a">Open hour:  <?php  echo $row['open_hour']; ?></p>
            <p class="a">Availability of reservation: <?php echo $row['availability']; ?></p>
        </div>
        <?php
    }
    ?>
<!----------------------Average rating---------------------------->
<?php
$conn = new mysqli("localhost", "root", "", "restaurantreview");
$query = "SELECT rating FROM restaurant_review";

$result = mysqli_query($conn, $query);
$total = 0;
$num = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result))
{
    $total+=$row['rating'];

}?>
<p class="a" style=" width:60%; margin:auto; text-align: left">Availability of reservation: <?php echo round($total/$num, 2);?></p><br>
<!---------------------------------------------------------------->
<!----------------------review---------------------------->
<?php
$conn = new mysqli("localhost", "root", "", "redwine");
$query = "SELECT review FROM restaurant_review ORDER BY  received_time DESC limit 5 ";
echo' <p class="a" style=" width:60%; margin:auto; text-align: left">Review:</p>';
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result))
{
    ?>
    <div style="margin-left: 220px;  text-align:left; font-size: 18px;padding-bottom: 5px;"> <?php  echo $row['review'] ?> </div>
    <?php
}
?>

<a href="restaurant_more_review.php"><button class="btn"" style="width: 130px;">View more</button></a>
<!-------------------------------------------------->
    <button class="btn" onclick="openForm()"><i class="fa fa-bars"></i>Make a reservation</button>

    <div class="form-popup welcome-info" id="myForm">
        <form class="form-container" method="post">
            <h1 style="font-family: 'Berkshire Swash', cursive;">Reservation</h1>
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label><b>Date&Time</b></label>
            <input type="text" placeholder="DD/MM/YY+Time" name="timeslot" required>

            <label><b>Number of people</b></label>
            <input type="text" placeholder="Enter number of people" name="numberOfPeople" required>

            <button type="submit" class="btn2">Submit</button>
            <button type="button" class="btn2 cancel" onclick="closeForm()">Close</button>
        </form>
    </div>

    <?php
    if($_POST)
    {
        $email = $_POST['email'];
        $timeslot = $_POST['timeslot'];
        $numberOfPeople = $_POST['numberOfPeople'];

        $conn = new mysqli("localhost", "root", "", "restaurantreview");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //----------------------------------update user information into database table---------------------

            $sql = "INSERT INTO reservation (email, time, GuestNumber) VALUE ('$email', '$timeslot', '$numberOfPeople')";
            echo "<meta http-equiv='refresh' content='0'>";

            if ($conn->query($sql) === TRUE) {}
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        $conn->close();
    }
    ?>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
</section>
</body>
</html>