<?php

require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

$Username = $_POST['Username'];
$password = $_POST['password'] ;

$qryFindUser = "SELECT * From restaurant WHERE userName = '$Username'";
$qryLogin = "SELECT * from restaurant WHERE userName = '$Username' AND password = '$password' ";

//Check if username exists
$resultUsername = mysqli_query($connection, $qryFindUser);
$resultLogin = mysqli_query($connection, $qryLogin);
$rowLogin = mysqli_fetch_array($resultLogin);

if (mysqli_num_rows($resultUsername) > 0) {
    if ($rowLogin['userName'] == $Username && $rowLogin['password'] == $password) {
        echo "Log in successful.";
    }
    else {
        echo "Incorrect password.";
    }
}
else {
    echo "Username not found.";
}