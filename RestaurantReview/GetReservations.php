<?php
session_start();
if (isset($_SESSION["userID"])) {

    require_once('PHP_Database/phpDatabaseConnection.php');
    require_once('header.php');

    $connection = connectToDb();
    $userID = $_SESSION['userID'];
    $userType = $_SESSION['userType'];


    ?>
    <style>
        .form-popup {
            display: none;
        }

        h1 {
            padding: 30px;
        }

        h2 {
            padding: 15px;
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
if ($userType == "businessman") {
    $querySearch = "SELECT restaurant.name, restaurant.address, reservation.time, reservation.GuestNumber, reservation.ReservationID
              FROM reservation JOIN Restaurant ON reservation.RestaurantID = restaurant.restaurantID 
              WHERE `businessmanID` = '$userID' ORDER BY reservation.time";

}elseif ($userType == "restaurant") {
    $querySearch = "SELECT businessman.name, businessman.contactNumber, reservation.time, reservation.GuestNumber, reservation.ReservationID
              FROM reservation JOIN businessman ON Reservation.businessmanID = businessman.businessmanID 
              WHERE `businessmanID` = '$userID' ORDER BY reservation.time";
}
        //echo $query;

        // Execute the query and retrieve the results
        $result = mysqli_query($connection, $querySearch);

        //display results in table form
        if ($result) {
            if($userType=="businessman") {

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
                    <td>
                        <button class="btn" onclick="getForm(<?php echo $reservation['ReservationID'] ?>)">Modify
                        </button>
                    </td>
                    <!-- form to cancel Reservation -->
                    <td class="cancelReservation">
                        <form action='deleteReservation.php' method="post">
                            <input type="hidden" name="reservationId" value="<?php echo $reservation['ReservationID']; ?>">
                            <button type="submit" class="btn" name="submit">Cancel</button>
                        </form>
                    </td>

                    <div class="form-popup" id="<?php echo $reservation['ReservationID'] ?>">
                        <form class="form-container" method="post" action="ModifyReservation.php">
                            <h2>Change your Reservation</h2>

                            <!--Input reservation ID but set display to hidden to make sure modify correct reservation-->
                            <input type="hidden" name="reservationID"
                                   value="<?php echo $reservation['ReservationID'] ?>"

                            <label><b>Date & Time</b></label>
                            <input type="datetime-local" id="date_and_time" name="time" required>

                            <label><b>Number of people</b></label>
                            <input type="number" name="GuestNumber" required>

                            <button type="submit" value="">Submit</button>
                            <button type="button" onclick="closeForm(<?php echo $reservation['ReservationID'] ?>)">Close</button>
                        </form>
                    </div>
                </tr>
            <?php } ?>
        </table>

        <?php }
            elseif ($userType == "restaurant"){
                ?>
                <table class="table">
            <tr>
                <th>Client</th>
                <th>Contact Number</th>
                <th>Date & Time</th>
                <th>Party</th>
                <th>Reservation ID</th>
                <th></th>
                <th></th>
            </tr>

            <?php while ($reservation = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $reservation['name'] ?></td>
                    <td><?php echo $reservation['contactNumber'] ?></td>
                    <td><?php echo $reservation['time'] ?></td>
                    <td><?php echo $reservation['GuestNumber'] ?></td>
                    <td><?php echo $reservation['ReservationID'] ?></td>
                    <td>
                        <button class="btn" onclick="getForm(<?php echo $reservation['ReservationID'] ?>)">Modify
                        </button>
                    </td>
                    <!-- form to cancel Reservation -->
                    <td class="cancelReservation">
                        <form action='deleteReservation.php' method="post">
                            <input type="hidden" name="reservationId" value="<?php echo $reservation['ReservationID']; ?>">
                            <button type="submit" class="btn" name="submit">Cancel</button>
                        </form>
                    </td>

                    <div class="form-popup" id="<?php echo $reservation['ReservationID'] ?>">
                        <form class="form-container" method="post" action="ModifyReservation.php">
                            <h2>Change your Reservation</h2>

                            <!--Input reservation ID but set display to hidden to make sure modify correct reservation-->
                            <input type="hidden" name="reservationID"
                                   value="<?php echo $reservation['ReservationID'] ?>"

                            <label><b>Date & Time</b></label>
                            <input type="datetime-local" name="time" required>

                            <label><b>Number of people</b></label>
                            <input type="number" name="GuestNumber" required>

                            <button type="submit" value="">Submit</button>
                            <button type="button" onclick="closeForm(<?php echo $reservation['ReservationID'] ?>)">
                                Close
                            </button>
                        </form>
                    </div>
                </tr>
            <?php } ?>
        </table>

        <?php }
            }
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

<?php
    require_once('footer.php');}
else {
    header('location:logInSelections.php');
}

?>

<!--<form action="" method="get" onsubmit="">-->
<!--    <h2>STEP 1: Choose date</h2>-->
<!--    <h5 class="redcolour">We accept from today to 2 months from today.</h5><br>-->
<!--    <input type="date" id="select_date" required><br><br>-->
<!--    <button class="btn-secondary rounded btn-lg" onclick="date_validation();" type="button">OK</button>-->
<!--</form>-->
