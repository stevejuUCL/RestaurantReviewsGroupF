<?php
session_start();
require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['date'])) {
        $input_date = $_POST['time'];
        $date = date("Y-m-d H:i:s",strtotime($input_date));
    }
    if (isset($_POST['GuestNumber'])) {
        $GuestNumber = $_POST['GuestNumber'] ?? '1';
    }
    if (isset($_POST['GuestNumber'])) {
        $reservationID = $_POST['reservationID'];
    }
}
$qryDelete = "DELETE FROM `reservation` WHERE `reservation`.`ReservationID` = '$reservationID'";
$delete = mysqli_query($connection, $qryDelete);

if (mysqli_affected_rows($connection) > 0) {
    header("Location: getReservations.php"); // Redirect back to reservations page
}
else{
    echo "<script> alert('Update unsuccessful.');</script>";
    header("Location: getReservations.php");
}