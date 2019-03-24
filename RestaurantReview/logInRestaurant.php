<?php
require_once('PHP_Database/phpDatabaseConnection.php');
//$connection = connectToDb();

    $Username = $_POST['Username'];
    $password = $_POST['password'] ;

$qryFindUser = "SELECT * From restaurant WHERE userName = '$Username'";
$qryLogin = "SELECT * from restaurant WHERE userName = '$Username' AND password = '$password' ";
$qryGetID = "SELECT restaurantID From restaurant WHERE userName = '$Username'";

//Check if username exists
$resultUsername = mysqli_query($connection, $qryFindUser);
$resultLogin = mysqli_query($connection, $qryLogin);
$rowLogin = mysqli_fetch_array($resultLogin);

if (mysqli_num_rows($resultUsername) > 0) {
    if ($rowLogin['userName'] == $Username && $rowLogin['password'] == $password) {
        $_SESSION['user'] = $rowLogin['restaurantID'];
        header('Location: index.html');
        session_start();

        // Store data in session variables
        $_SESSION["loggedIn"] = true;
        $_SESSION["id"] = $id;
        $_SESSION["username"] = $resultUsername;

        header("location: rsProfileView.php");
    }
    else {
        echo "Incorrect password.";
    }
}
else {
    echo "Username not found.";
}

closeDb($connection);