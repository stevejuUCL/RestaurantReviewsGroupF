
<?php
require_once('./../RestaurantReview/header.php');
?>

<title>Reservations</title>

<section class="innerpage-wrapper">
    <div id="dashboard" class="innerpage-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="dashboard-heading text-center">
                        <h1>Reservations</h1>
                        <p>All your booking with us will be managed here!</p>
                    </div><!-- end dashboard-heading -->
                    <div class="dashboard-wrapper">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-restaurant">
                                <h2 class="dash-content-title">Restaurants You have Booked!</h2>
                                <div class="table-responsive">
                                    <?php
                                    $sql = 'select r.*, rs.name, b.name as bname, b.email, b.contactnumber from reservations r join businessman b on r.BusinessmanID = b.businessmanID join restaurant rs on r.RestaurantID = rs.RestaurantID where r.BusinessmanID = "'.$_SESSION['user'].'" and r.Reservation_status = "Active" order by time ASC';
                                    $query = mysqli_query($connection, $sql);
                                    ?>
                                    <?php
                                    if ($query && mysqli_num_rows($query)) {
                                        ?>
                                        <table class="table table-hover">
                                            <tbody>
                                    <?php
                                        while ($reservation = mysqli_fetch_array($query)):
                                            ?>
                                            <tr>
                                                <td class="dash-list-icon booking-list-date">
                                                    <div class="b-date">
                                                        <h3><?= date("d", strtotime($reservation['time'])) ?></h3>
                                                        <p><?= date("F", strtotime($reservation['time'])) ?></p>
                                                    </div>
                                                </td>
                                                <td class="dash-list-text booking-list-detail">
                                                    <h3><?= $reservation['name'] ?></h3>
                                                    <ul class="list-unstyled booking-info">
                                                        <li><span>Booking Date:</span> <?= date("d.m.Y", strtotime($reservation['Reservation_date'])) ?> at <?= date("h:i a", strtotime($reservation['Reservation_date'])) ?></li>
                                                        <li><span>Booking Details:</span> <?= $reservation['GuestNumber'] ?> People</li>
                                                        <li><span>Client:</span> <?= $reservation['bname'] ?><span class="line">|</span><?= $reservation['email'] ?><span class="line">|</span><?= $reservation['contactnumber'] ?></li>
                                                    </ul>

                                                    <button class="btn btn-warning edit-resv" data-resv="<?= $reservation['ReservationID'] ?>" data-toggle="modal" data-target="#editform<?= $reservation['ReservationID'] ?>">Edit</button>

                                                    <div id="editform<?= $reservation['ReservationID'] ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <form action="editReservation.php" method="post">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Change your plan</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="revid" value="<?= $reservation['ReservationID'] ?>">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="time<?= $reservation['ReservationID'] ?>">Change the time:</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="text" class="form-control" id="time<?= $reservation['ReservationID'] ?>" name="time<?= $reservation['ReservationID'] ?>" value="<?= date("Y-m-d H:i:s", strtotime($reservation['Reservation_date'])) ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label for="guest<?= $reservation['ReservationID'] ?>">Change the number of guest:</label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <input type="number" class="form-control" id="guest<?= $reservation['ReservationID'] ?>" name="guest<?= $reservation['ReservationID'] ?>" value="<?= $reservation['GuestNumber'] ?>">
                                                                            </div>
                                                                        </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="dash-list-btn">
                                                    <form method="post" action="cancelReservation.php">
                                                        <input type="hidden" value="<?= $reservation['ReservationID'] ?>" name="revid">
                                                        <button class="btn btn-danger cancel-resv" data-resv="" type="submit">Cancel</button>
                                                    </form>

                                                </td>
                                            </tr>
                                            <?php
                                        endwhile;
                                        ?>
                                            </tbody>
                                        </table>
                                    <?php
                                    } else {
                                        echo '<h3>You didn\'t book yet!</h3>';
                                    }
                                    ?>
                                </div><!-- end table-responsive -->
                            </div><!-- end booking-listings -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end dashboard-wrapper -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end dashboard -->
</section><!-- end innerpage-wrapper -->

<?php
require_once('\'./../RestaurantReview/footer.php');
?>

