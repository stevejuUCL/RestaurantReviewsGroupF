
<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');

//get date and configure so that date format is compatible with SQL
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['time'])) {
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
/*testing - might not be needed

        $input_date = $_POST['date'];
    } else {
        $message = "No Time Input<br>";
        header('location: getReservations.php');
        exit;
    }
}*/
//get other values from form
    //query to alter database
    $qryModify = "UPDATE `reservation` SET `time` = '$date', `GuestNumber` = '$GuestNumber' WHERE `reservation`.`ReservationID` = '$reservationID'";
    //echo $qryModify;

    $update = mysqli_query($connection, $qryModify);

    //test if query works
    $cannotModify ="";
    if (mysqli_affected_rows($connection) > 0) {
        header("Location: getReservations.php"); // Redirect back to reservations page
    }
    else{
        echo "<script> alert('Update unsuccessful.');</script>";
        header("Location: getReservations.php");
    }


