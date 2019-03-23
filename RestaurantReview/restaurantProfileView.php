<?php
require_once('header.php');
?>
<!-- restaurant profile & reservation -->
    <div><br><br><br><br><br></div>
    <section class="panel-restaurant">
        <p class="avatar" align="center">
            <img src="https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500">
        </p>
        <h3 class="panel-text3">Restaurant Profile</h3><br>
        <ul style="list-style-type: none;" class="panel-text4">
            <li>Restaurant Name:</li>
            <li>Email:</li>
            <li>Contact Number:</li>
            <li>Average Rating:</li>
            <li>Review:</li>
            <li>Open hour:</li>
        </ul>
        <button class="btn" onclick="openForm()"><i class="btn1"></i>Make a reservation</button>

        <div class="form-popup" id="myForm">
            <form class="form-container">
                <h1>Reservation</h1><br>

                <label><b>Email</b></label><br>
                <input type="text" placeholder="Enter Email" name="email" required>

                <label><b>Date&Time</b></label>
                <input type="text" placeholder="DD/MM/YY+Time" name="timeslot" required>

                <label><b>Number of people</b></label>
                <input type="text" placeholder="Enter number of people" name="numberOfPeople" required>

                <button type="submit" class="btn2">Submit</button>
                <button type="button" class="btn2 cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

        <script src="js/resProfileView.js"></script>
    </section>
    <div><br><br><br><br><br></div>
    <!-- restaurant profile & reservation -->
<?php
require_once('footer.php');
?>