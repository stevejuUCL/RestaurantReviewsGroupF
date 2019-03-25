<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $all_correct = true;
    $error_message = "";
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username']; //PHP 7.0
    } else {
        $all_correct = false;
        $error_message .= "Empty username<br>";
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email']; //PHP 7.0
    } else {
        $all_correct = false;
        $error_message .= "Empty email<br>";
    }

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $all_correct = false;
        $error_message .= "Empty password<br>";
    }

    if (isset($_POST['confirmPassword']) && !empty($_POST['confirmPassword'])) {
        $confirmPassword = $_POST['confirmPassword'];
        if ($confirmPassword != $password) {
            $all_correct = false;
            $error_message .= "Password mismatch<br>";
        }
    } else {
        $all_correct = false;
        $error_message .= "Empty password confirm<br>";
    }

    $userType = $_POST['userType'];

    $qryFindUsername = "SELECT * FROM users ";
    $qryFindUsername .= "WHERE username = '" . $username . "'";
    $result1 = mysqli_query($connection, $qryFindUsername);

    if (mysqli_num_rows($result1) > 0) {
        $all_correct = false;
        $error_message .= "Username already exists.<br>";
    }

    $qryFindEmail = "SELECT * FROM users ";
    $qryFindEmail .= "WHERE email = '" . $email . "'";

    $result2 = mysqli_query($connection, $qryFindEmail);
//    print_r(mysqli_fetch_assoc($result2));
    if (mysqli_num_rows($result2) > 0) {
        $all_correct = false;
        $error_message .= "Email already registered.<br>";
    }

    if ($all_correct) {
        $qryCreate = "INSERT INTO users (username, email, password, userType) VALUES ('$username', '$email', '$password', '$userType')";
        mysqli_query($connection, $qryCreate);
        $success_message = "Success! Please Log In to update your Account Information. <br>";
        $_SESSION["success_message"] = $success_message;
        header('Location: logInSelections.php');
    } else {
        $_SESSION["error_message"] = $error_message;
        if ($userType == "businessman") {
            header('Location: signUpBusinessman.php');
        } elseif ($userType == "restaurant") {
            header('Location: signUpRestaurant.php');
        }else {
            header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found!!!");
            exit("<h1>404 Not Found</h1>");
        }
    }
}
