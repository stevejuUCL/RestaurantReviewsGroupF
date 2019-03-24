
<?php
include_once('PHP_Database/phpDatabaseConnection.php');


//get date and configure so that date format is compatible with SQL
$input_date = $_POST['time'];
$date = date("Y-m-d H:i:s",strtotime($input_date));

/*testing - might not be needed
 * if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validate using isset loop

    if (isset($_POST['date'])) {
        $input_date = $_POST['date'];
    } else {
        $message = "No Time Input<br>";
        header('location: getReservations.php');
        exit;
    }
}*/
//get other values from form
    $GuestNumber = $_POST['GuestNumber'] ?? '1';
    $reservationID = $_POST['reservationID'];

    //query to alter database
    $qryModify = "UPDATE `reservation` SET `time` = '$date', `GuestNumber` = '$GuestNumber' WHERE `reservation`.`ReservationID` = '$reservationID'";

    //echo $qryModify;

    $update = mysqli_query($connection, $qryModify);

    //test if query works
    if (mysqli_affected_rows($connection) > 0) {
        header("Location: getReservations.php"); // Redirect back to reservations page
    }
    else{
        echo "<script> alert('Update unsuccessful.');</script>";
        header("Location: getReservations.php");
    }


