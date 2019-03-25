<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');
require_once('header.php');


$userID = $_SESSION['userID'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];

$queryExist = "SELECT * From businessman JOIN users on businessman.businessmanID = users.userID WHERE businessmanID = '$userID'";
$resultExist = mysqli_query($connection, $queryExist);

//check if user already updated their information then display in a table
if (mysqli_num_rows($resultExist) > 0) {
    ?>
    <title> Your Information </title>
    <div class="container">
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">My Account</li>
        </ol>
    </div>

    <div>
        <br><br><br><br><br>
    </div>

    <div>
    <table class="center">
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Contact Number</th>
        <th>Company</th>
        <th>Email</th>
        <th></th>
    </tr>

    <?php while ($businessman = mysqli_fetch_assoc($resultExist)) { ?>
        <td><?php echo $businessman['name'] ?></td>
        <td><?php echo $businessman['username'] ?></td>
        <td><?php echo $businessman['contactNumber'] ?></td>
        <td><?php echo $businessman['company'] ?></td>
        <td><?php echo $businessman['email'] ?></td>
        </table>
        </div>

        <div>
            <br><br><br><br><br>
        </div>

    <?php }
//if they haven't yet, prompt them to update their Information
}else {
  ?>
    <title>Please Update Your Account </title>
    <div class="account-agileinfo">
        <div class="login-page about">
            <img class="login-w3img" src="../RestaurantReview/img/img3.jpg" alt="">
            <div class="container">
                <div class="login-agileinfo">
                    <form action="updateInfo.php" method="post">
                        <label>Please Update Your Account </label>
                        <input class="form-group" type="hidden" name="userID" value="<?php echo $userID?>">
                        <input class="form-group" type="hidden" name="userType" value="businessman">

                        <input class="agile-ltext" type="text" name="username" placeholder="Username" value="<?php echo $username?>" required="">

                        <input class="agile-ltext" type="text" name="name" placeholder="Full Name" required="">

                        <input class="agile-ltext" type="text" name="contactNumber" placeholder="Phone Number" required="">

                        <input class="agile-ltext" type="text" name="company" placeholder="Company Name" required="">

                        <input class="agile-ltext" type="email" name="email" placeholder="Email" value="<?php echo $email?>" required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php }
require_once('footer.php');
?>