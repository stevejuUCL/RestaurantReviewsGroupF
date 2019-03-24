<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Businessman Profile</title>
    <style>
        body {
            background: linear-gradient(135deg, #3023AE, #C86DD7);
            background-attachment: fixed;
            font-size: 15px;
            font-family: "Helvetica Neue", Helvetica, Microsoft Yahei;
        }

        .panel {
            margin: 120px auto 60px;
            text-align: center;
            background-color: white;
            width: 500px;
            border-radius: 10px;
            padding: 1px;
            transition: box-shadow .30s;
        }
        .panel:hover{
            box-shadow: #fff 5px 5px 25px;
        }
        .avatar img {
            width: 120px;
            height: 120px;
            border-radius: 60px;
            margin-top: -60px;
        }
    </style>
    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 6px 15px 6px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 250px;
            cursor: pointer;
        }


        .button4 {border-radius: 12px;}

    </style>
</head>
<body>
<section class="panel">
    <p class="avatar">
        <?php
        $conn = new mysqli("localhost", "root", "", "restaurantreview");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //----------------select image url from database table-------------------
        $query = "SELECT img_url FROM users WHERE username = 'jackson' ";
        $result = mysqli_query($conn, $query);

        //--------------- display at the screen uploaded image from database  ------------------
        while ($row = mysqli_fetch_array($result))
        {
            echo '<img src = "data:image/jpeg;base64,'.base64_encode($row['img_url']).'" style="border-radius:50%; margin-bottom;20px;"/>';
        }
        ?>
    </p>
    <div style="text-align: left; width: 50%; margin: auto;">
        <?php
        $conn = new mysqli("localhost", "root", "", "restaurantreview");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //    $sql = "SELECT actor.first_name, actor.last_name,   actor.total_number_of_films FROM actor INNER JOIN film ON actor.film_title = film.film_title where actor.film_title='$search_word' GROUP BY actor.total_number_of_films DESC limit 5";

        $query = "SELECT name, username, email, company_name, contact_number,  img_url FROM users WHERE username = 'jackson'";

        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result))
        {
            ?>
                    <h4 >Name:  <?php  echo $row['name'] ?></h4>
                    <h4 >Username: <?php  echo $row['username'] ?></h4>
                    <h4>Email:   <?php  echo $row['email'] ?></h4>
                    <h4>Company Name:   <?php  echo $row['company_name'] ?> </h4>
                    <h4>Contact Number: <?php  echo $row['contact_number'] ?> </h4>
<!--                    <h4>Average Rating: --><?php // echo $row['rating'] ?><!-- </h4>-->


            <?php
        }

        ?>
<!----------------------Average rating---------------------------->
        <?php
        $conn = new mysqli("localhost", "root", "", "restaurantreview");
        $query = "SELECT businessman_review.rating FROM users INNER JOIN businessman_review
                    ON users.username = businessman_review.name ";

        $result = mysqli_query($conn, $query);
        $total = 0;
        $num = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result))
        {
            $total+=$row['rating'];
        }?>
        <h4>Average Rating: <?php echo round($total/$num, 2);?></h4>
<!---------------------------------------------------------------->
<!----------------------review---------------------------->
    <?php
          $conn = new mysqli("localhost", "root", "", "restaurantreview");
          $query = "SELECT businessman_review.review FROM users INNER JOIN businessman_review
                    ON users.username = businessman_review.name
                    ORDER BY businessman_review.received_time DESC limit 5 ";
          echo'<h4>Review:</h4>';
          $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result))
            {
                ?>
                <div style="margin-left: 70px;  font-size: 18px;padding-bottom: 5px;"> <?php  echo $row['review'] ?> </div>
                <?php
            }
    ?>
    <a href="businessman_more_review.php"><button class="button button4">More</button></a>
<!-------------------------------------------------->


            </div>
        </div>
    </div>

</section>
</body>
</html>