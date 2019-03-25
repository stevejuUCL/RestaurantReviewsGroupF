<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');
require_once('header.php');

// loop if check from database if user exist in correct table
// if true >> $exist = true;
// else >> $exist = false;

$userID = $_SESSION['userID'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];

$queryExist = "SELECT * From restaurant JOIN users on restaurant.restaurantID = users.userID WHERE restaurantID = '$userID'";
$resultExist = mysqli_query($connection, $queryExist);

if (mysqli_num_rows($resultExist) > 0) {

    ?>
    <title> Your Information </title>
    <div class="container">
        <ol class="breadcrumb w3l-crumbs">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">My Account</li>
        </ol>
    </div>

    <div style="text-align: center">
    <table class="table">
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Type of Cuisine</th>
        <th>Price Range</th>
        <th>Email</th>
        <th></th>
    </tr>

    <?php while ($restaurant = mysqli_fetch_assoc($resultExist)) { ?>
        <td><?php echo $restaurant['name'] ?></td>
        <td><?php echo $restaurant['username'] ?></td>
        <td><?php echo $restaurant['address'] ?></td>
        <td><?php echo $restaurant['contactNumber'] ?></td>
        <td><?php echo $restaurant['typeOfCuisine'] ?></td>
        <td><?php echo $restaurant['priceRange'] ?></td>
        <td><?php echo $restaurant['email'] ?></td>
        </table>
        </div>

    <?php }
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
            <input class="agile-ltext" type="hidden" name="userID" value="<?php echo $userID?>">
            <input class="agile-ltext" type="hidden" name="userType" value="restaurant">
            <input class="agile-ltext" type="text" name="username" placeholder="Username" value="<?php echo $username?>" required="">
            <input class="agile-ltext" type="text" name="name" placeholder="Full Name" required="">
            <input class="agile-ltext" type="text" name="address" placeholder="Address" required="">
            <input class="agile-ltext" type="text" name="contactNumber" placeholder="Phone Number" required="">
            <input class="agile-ltext" type="text" name="cuisine" placeholder="Type of Cuisine" required="">
            <input class="agile-ltext" type="text" name="priceRange" placeholder="Price" required="">
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