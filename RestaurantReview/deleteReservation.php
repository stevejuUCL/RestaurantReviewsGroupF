<?php
session_start();
require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "pOST";
    if (isset($_POST['reservationId'])) {
        echo "issset";
        $reservationID = $_POST['reservationId'];
        $qryDelete = "DELETE FROM `reservation` WHERE `reservation`.`ReservationID` = '$reservationID'";
        //echo $qryDelete;
        $delete = mysqli_query($connection, $qryDelete);

        if ($delete) {
            header("Location: getReservations.php"); // Redirect back to reservations page
        } else {
            header("Location: getReservations.php");
        }
    }


}