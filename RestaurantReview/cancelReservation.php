<?php

require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

if (!isset($_SESSION['user'])) {
    header('Location: index.html');
}

$revid = $_POST['revid'];
if ($revid === false) {
    header('Location: index.html');
}

$checksql = 'select count(*) from reservations where businessmanID = '.$_SESSION['user'].' and ReservationID = '.$revid;
$checkquery = mysqli_query($connection, $checksql);
if ($checkquery && mysqli_num_rows($checkquery)) {
    $sql = 'update reservations set Reservation_status = "Deactivated" where ReservationID = '.$revid;
    $query = mysqli_query($connection, $sql);
    header('Location: reservations.php');
    exit;
}
header('Location: index.html');