<?php
require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

$input_date = $_POST['time'];
$date = date("Y-m-d H:i:s",strtotime($input_date));

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validate using isset loop

    if (isset($_POST['time'])) {
        $input_date = $_POST['time'];
    } else {
        $message = "No Time Input<br>";
        header('location: GetReservations.php');
        exit;
    }
}*/

    $GuestNumber = $_POST['GuestNumber'] ?? '1';
    $reservationID = $_POST['reservationID'];

    //query to alter database
    $qryModify = "UPDATE `reservation` SET `time` = '$date', `GuestNumber` = '$GuestNumber' WHERE `reservation`.`ReservationID` = $reservationID ";

    //test if query works
    echo $qryModify;

    $result = mysqli_query($connection, $qryModify);



?>

<a href="GetReservations.php"> Back </a>
