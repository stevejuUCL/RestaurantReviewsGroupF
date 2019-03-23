<?php
require_once('PHP_Database/phpDatabaseConnection.php');

$connection = connectToDb();

$Username = $_POST['Username'];
$password = $_POST['password'] ;

$qryFindUser = "SELECT * From businessman WHERE username = '$Username'";
$qryLogin = "SELECT * from businessman WHERE username = '$Username' AND password = '$password' ";

//Check if username exists
$resultUsername = mysqli_query($connection, $qryFindUser);
$resultLogin = mysqli_query($connection, $qryLogin);
$rowLogin = mysqli_fetch_array($resultLogin);

if (mysqli_num_rows($resultUsername) > 0) {
    if ($rowLogin['username'] == $Username && $rowLogin['password'] == $password) {
        $_SESSION['user'] = $rowLogin['businessmanID'];
        header('Location: index.html');
    }
    else {
        echo "Incorrect password.";
    }
}
else {
    echo "Username not found.";
}