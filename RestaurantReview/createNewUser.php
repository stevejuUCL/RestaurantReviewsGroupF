<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $all_correct = true;
    $error_message = "";
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username']; //PHP 7.0
        echo $username . "<br>";
    } else {
        $all_correct = false;
        $error_message .= "Empty username<br>";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email']; //PHP 7.0
        echo $email . "<br>";
    } else {
        $all_correct = false;
        $error_message .= "Empty email<br>";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
        echo $password . "<br>";
    } else {
        $all_correct = false;
        $error_message .= "Empty password<br>";
    }

    if (isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword'])) {
        $confirmPassword = $_POST['confirmPassword'];
        echo $confirmPassword . "<br>";
        if ($confirmPassword != $password) {
            $all_correct = false;
            $error_message .= "Password mismatch<br>";
        }
    } else {
        $all_correct = false;
        $error_message .= "Empty password confirm<br>";
    }

    $userType = $_POST['submit_button'];

    $qryFindUsername = "SELECT * FROM users ";
    $qryFindUsername .= "WHERE username = '" . $username . "'";
    $result1 = mysqli_query($connection, $qryFindUsername);

    if (mysqli_num_rows($result1) > 0) {
        $all_correct = false;
        $error_message .= "Username already exists.<br>";
    }

    $qryFindEmail = "SELECT * FROM users ";
    $qryFindEmail .= "WHERE email = '" . $email . "'";
//    echo mysqli_num_rows($result1) . "<br>";

    $result2 = mysqli_query($connection, $qryFindEmail);
//    echo mysqli_num_rows($result2) . "<br>";
//    print_r(mysqli_fetch_assoc($result2));
    if (mysqli_num_rows($result2) > 0) {
        $all_correct = false;
        $error_message .= "Email already registered.<br>";
    }

    if ($all_correct) {
        $qryCreate = "INSERT INTO users (username, email, password, userType) VALUES ('$username', '$email', '$password', '$userType')";
        mysqli_query($connection, $qryCreate);
    } else {
        $_SESSION["error_message"] = $error_message;
        if ($userType == "businessman") {
            header('Location: signUpBusinessman.php');
        }elseif ($userType == "restaurant"){
            header('Location: signUpRestaurant.php');
        }

    }
}


