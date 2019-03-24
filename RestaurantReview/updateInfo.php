<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header('location: logInSelections.php');
} else {
    if (isset($_POST['userID'])) {
        $userID = $_POST['userID'];
    }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }

    if (isset($_POST['contactNumber'])) {
        $contactNumber = $_POST['contactNumber'];
    }

    if (isset($_POST['company'])) {
        $company = $_POST['company'];
    }

    if(isset($_POST['userType'])) {
        $userType = $_POST['userType'];
    }

    if(isset($_POST['address'])) {
        $address = $_POST['address'];
    }

    if(isset($_POST['cuisine'])){
        $cuisine = $_POST['cuisine'];
    }

    if(isset($_POST['priceRange'])) {
        $priceRange = $_POST['priceRange'];
    }

    if ($userType == "businessman"){
        $qryUpdate = "INSERT into businessman (businessmanID, name, contactNumber, company) VALUES ('$userID', '$name','$contactNumber', '$company')";
    } elseif ($userType == "restaurant") {
        $qryUpdate = "INSERT into restaurant (restaurantID, name, address, contactNumber, typeOfCuisine, priceRange) VALUES ('$userID', '$name', '$address','$contactNumber', '$cuisine', '$priceRange')";
    }

    $update = mysqli_query($connection, $qryUpdate);

    if (mysqli_affected_rows($connection) > 0) {
        if ($userType == "businessman") {
            header("Location: updateInfoBusinessman.php");
        }
        elseif ($userType == "restaurant") {
            header("Location: updateInfoRestaurant.php");
        }else{
            echo "<script> alert('Update unsuccessful.');</script>";
            header("Location: getReservations.php");
        }
    }
}


