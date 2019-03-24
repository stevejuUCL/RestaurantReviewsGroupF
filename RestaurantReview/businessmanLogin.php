<?php
require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

$username = $_POST['Username'];
$password = $_POST['password'] ;

$qryFindUser = "SELECT * From users WHERE username = '$username'";
$qryLogin = "SELECT * from users WHERE username = '$username' AND password = '$password' ";

//Check if username exists
$resultUsername = mysqli_query($connection, $qryFindUser);
$resultLogin = mysqli_query($connection, $qryLogin);
$rowLogin = mysqli_fetch_array($resultLogin);

if (mysqli_num_rows($resultUsername) > 0) {
    if ($rowLogin['username'] == $Username && $rowLogin['password'] == $password) {
        $_SESSION['user'] = $rowLogin['userID'];
        header('Location: updateInfo.php');
    }
    else {
        echo "Incorrect password.";
    }
}
else {
    echo "Username not found.";
}