<title>Make a Reservation</title>
<?php session_start();
require_once ("header.php");
require_once('PHP_Database/phpDatabaseConnection.php');
?>
<!-- breadcrumb -->
<div class="container">
    <ol class="breadcrumb w3l-crumbs">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Make a reservation</li>
    </ol>
</div>
<!-- //breadcrumb -->
<?php
$date = $_POST['dateReserve'];
$time = $_POST['time_choose'];
$number = $_POST['people_choose'];
$userId = $_SESSION["userID"];
$restaurantId = $_SESSION["resID"];
$qryMakeRes ="INSERT INTO `reservation` (`ReservationID`, `RestaurantID`, `BusinessmanID`, `date`, `time`, `GuestNumber`, `additionalRequest`) 
VALUES (NULL, '$restaurantId', '$userId', '$date', '$time', '$number', '')";
if(mysqli_query($connection, $qryMakeRes)){
    echo "<br><br><br><br><br>";
    echo "<h3 style='text-align: center;'>Success! See you there!😉</h3><br>";
    echo "<h4 style='text-align: center;'><a href='index.php'>Go Back to Home.</a></h4>";
    echo "<br><br><br><br><br>";
}else{
    echo "<br><br><br><br><br>";
    echo "<h3 style='text-align: center;'>Failed😔</h3><br>";
    echo "<h4 style='text-align: center;'><a href='index.php'>Make another reservation.</a></h4>";
    echo "<br><br><br><br><br>";
}
?>



<?php
require_once ("footer.php");
?>