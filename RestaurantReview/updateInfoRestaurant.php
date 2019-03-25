<?php session_start();
require_once('PHP_Database/phpDatabaseConnection.php');
require_once('header.php');

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
            <input class="agile-ltext" type="hidden" name="userID" value="<?php echo $userID?>">
            <input class="agile-ltext" type="hidden" name="userType" value="restaurant">
            <label> Username </label>
            <input class="agile-ltext" type="text" name="username" placeholder="Username" value="<?php echo $username?>">
            <label> Your Name</label>
            <input class="agile-ltext" type="text" name="name" placeholder="Your Name" required>
            <label> Address </label>
            <input class="agile-ltext" type="text" name="address" placeholder="Address" required>
            <label> Telephone Number </label>
            <input class="agile-ltext" type="tel" name="contactNumber" placeholder="Tel.no" required>
            <label> Cuisine </label>
            <input class="agile-ltext" type="text" name="typeOfCuisine" placeholder="Cuisine" required>
            <label> Price Range </label>
            <input class="agile-ltext" type="number" name="priceRange" placeholder="Price Range" required>
            <label> Email </label>
            <input class="agile-ltext" type="email" name="email" placeholder="Email" value="<?php echo $email?>">
            <input type="submit" value="Submit">
        </form>
    </div>
    </div>
    </div>
    </div>

<?php }
require_once('footer.php');
?>