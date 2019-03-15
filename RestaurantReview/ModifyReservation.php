<?php
require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validate using isset loop

    if (isset($_POST['time'])) {
        $time = $_POST['time'];
    } else {
        $message = "no time<br>";
        header('location: GetReservations.php');
        exit;
    }
}

    $GuestNumber = $_POST['GuestNumber'] ?? '1';


    $qryModify = "REPLACE INTO reservation ( time, GuestNumber) VALUES ($time, $GuestNumber)";

    echo $qryModify;

    $result = mysqli_query($connection, $qryModify);



?>

<a href="GetReservations.php"> Back </a>
