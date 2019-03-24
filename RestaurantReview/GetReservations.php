<?php
session_start();
require_once('PHP_Database/phpDatabaseConnection.php');
require_once('header.php');

$connection = connectToDb();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
}

$current_user = $_SESSION['user'];

?>
    <style>
        .form-popup {
            display: none;
        }
        h1 {
            padding: 30px;
        }
        h2 {
            padding:15px;
        }
        button {
            background-color: salmon;
            text-align: center;
            color: white;
        }

    </style>
<div class="container">
    <h1>My Reservations</h1>
    <br>
    <?php

    // Connect to the database
    $connection = connectToDb();

    //$businessmanID = $_POST['businessmanID'];

    // Build the query statement
    $query = "SELECT Restaurant.name, Restaurant.address, reservation.time, reservation.GuestNumber, reservation.ReservationID
              FROM reservation JOIN Restaurant ON Reservation.RestaurantID = Restaurant.restaurantID WHERE `businessmanID` = '$current_user' ORDER BY reservation.time";
              //WHERE businessman.ID = $businessmanID

    //echo $query;

    // Execute the query and retrieve the results
    $result = mysqli_query($connection, $query);

    //display results in table form
if ($result) {

    ?>

        <table class="table">
            <tr>
                <th>Restaurant</th>
                <th>Address</th>
                <th>Date & Time</th>
                <th>Party</th>
                <th>Reservation ID</th>
                <th></th>
                <th></th>
            </tr>

            <?php while ($reservation = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $reservation['name'] ?></td>
                    <td><?php echo $reservation['address'] ?></td>
                    <td><?php echo $reservation['time'] ?></td>
                    <td><?php echo $reservation['GuestNumber'] ?></td>
                    <td><?php echo $reservation['ReservationID'] ?></td>
                    <td><button class="btn" onclick="getForm(<?php echo $reservation['ReservationID'] ?>)">Modify</button></td>
                    <!-- form to cancel Reservation -->
                    <td class="cancelReservation">
                        <form action='cancelReservation.php?name="<?php echo $reservation['ReservationID']; ?>"' method="post">
                            <input type="hidden" name="reservationId" value="<?php echo $reservation['ReservationID']; ?>">
                            <button type="submit" class="btn" name="submit">Cancel</button>
                        </form>
                    </td>

                    <div class="form-popup" id="<?php echo $reservation['ReservationID']?>">
                        <form class="form-container" method="post" action="ModifyReservation.php">
                            <h2>Change your Reservation</h2>

                            <!--Input reservation ID but set display to hidden to make sure modify correct reservation-->
                            <input type="hidden" name="reservationID" value="<?php echo $reservation['ReservationID'] ?>"

                            <label><b>Date & Time</b></label>
                            <input type="datetime-local" name="time" required>

                            <label><b>Number of people</b></label>
                            <input type="number"  name="GuestNumber" required>

                            <button type="submit" value="">Submit</button>
                            <button type="button" onclick="closeForm(<?php echo $reservation['ReservationID'] ?>)">Close</button>
                        </form>
                    </div>
                </tr>
            <?php } ?>
        </table>

    <?php
    // Free the results from memory
    mysqli_free_result($result);

    // Close the connection
    closeDb($connection);
    ?>

</div>

<script>
    function getForm(x) {
        document.getElementById(x).style.display = "block";
    }
    function closeForm(x) {
        document.getElementById(x).style.display = "none";
    }
</script>

<?php }
require_once('footer.php');