<?php session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST") {
     header('location: logInSelections.php');
    } else {
        require_once('PHP_Database/phpDatabaseConnection.php');

        $connection = connectToDb();

        $username = $_POST['username'];
        $password = $_POST['password'];
        $userType = $_POST['userType'];

        $qryFindUser = "SELECT * From users WHERE username = '$username'";
        $qryLogin = "SELECT * from users WHERE username = '$username' AND password = '$password' ";


//Check if username exists
        $resultUsername = mysqli_query($connection, $qryFindUser);
        $resultLogin = mysqli_query($connection, $qryLogin);
        $rowLogin = mysqli_fetch_array($resultLogin);


        if (mysqli_num_rows($resultUsername) > 0) {
            if ($rowLogin['username'] == $username && $rowLogin['password'] == $password) {
                $_SESSION['userID'] = $rowLogin['userID'];
                $_SESSION['username'] = $rowLogin['username'];
                $_SESSION['email'] = $rowLogin['email'];
                if ($rowLogin['userType'] == "businessman") {
                    header('Location: updateInfoBusinessman.php');
                } elseif ($rowLogin['userType'] == "restaurant") {
                    header('Location: updateInfoRestaurant.php');
                }
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "Username not found.";
        }
    }
