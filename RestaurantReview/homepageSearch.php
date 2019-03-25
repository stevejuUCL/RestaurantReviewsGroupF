<title>Search</title>

<?php
require_once('header.php');
?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #ff5063;
        text-align: center;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: lightcoral;
    }
</style>
<br><br><br><br><br>
<div>
    <p style='text-align:center;'>
    <table>

        <?php
        /**
         * Created by PhpStorm.
         * User: steveju
         * Date: 2019-03-24
         * Time: 02:46
         */
        require_once('PHP_Database/phpDatabaseConnection.php');

        $search = $_POST['Search'];

        $qrySearch = "SELECT * FROM restaurant WHERE name Like '%$search%' OR address LIKE '%$search%' OR typeOfCuisine LIKE '%$search%' ";

        $searchResult = mysqli_query($connection, $qrySearch);

        if (mysqli_num_rows($searchResult) > 0) {
            while ($row = $searchResult->fetch_assoc()) {
                echo "<tr>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th></th>
                      </tr>";
                echo "<tr>" .
                        "<td>" . $row["name"] . "</td>" .
                        "<td>" . $row["contactNumber"] . "</td>" .
                        "<td>" . $row["address"] . "</td>" .
                        "<td>" . $row["typeOfCuisine"] . "</td>" .
                        "<td>" . $row["priceRange"] . "</td>" .
                        "<td><a href=\"#\" style='color: #ffffff;' data-toggle=\"modal\" data-target=\"#myModal1\">Make a reservation</a></td>" .
                    "</tr>";
            }
        } else {
            echo "<h3 style='text-align:center'>Sorry, restaurant not found.😢<h3>";
        }
        ?>
    </table>
    </p>
</div>
<br><br><br><br><br>

<!-- modal -->
<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
            </div>
            <section>
                <div class="modal-body">
                    <div class="col-md-5 modal_body_left">
                        <img src="../RestaurantReview/img/s1.jpg" alt=" " class="img-responsive">
                    </div>
                    <div class="col-md-7 modal_body_right single-top-right">
                        <h3 class="item_name">Resaurant name</h3>
                        <p>Some descriptions</p>
                        <div class="single-rating">
                            <ul>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li class="w3act"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                <li class="rating">** reviews</li>
                                <li><a href="#">Add your review</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <form action="createNewRsv.php" method="POST">
                                    <input type="date" name="dateReserve">
                                    <select id="" name="time_choose" required>
                                        <option value="">Choose your time</option>
                                        <option value="17:30:00">05:30pm</option>
                                        <option value="18:00:00">06:00pm</option>
                                        <option value="18:30:00">06:30pm</option>
                                        <option value="19:00:00">07:00pm</option>
                                        <option value="19:30:00">07:30pm</option>
                                        <option value="20:00:00">08:00pm</option>
                                        <option value="20:30:00">08:00pm</option>
                                        <option value="21:00:00">09:00pm</option>
                                        <option value="21:30:00">09:30pm</option>
                                        <option value="22:00:00">10:00pm</option>
                                        <option value="22:30:00">10:30pm</option>
                                        <option value="23:00:00">11:00pm</option>
                                    </select>
                                    <select id="" name="people_choose" required>
                                        <option value="">Choose table size</option>
                                        <option value="1">table for 1</option>
                                        <option value="2">table for 2</option>
                                        <option value="3">table for 3</option>
                                        <option value="4">table for 4</option>
                                        <option value="5">table for 5-8</option>
                                        <option value="9">table for 9-10</option>
                                        <option value="10">table for 10+</option>
                                    </select>
                                </form>
                            </ul>
                        </div>
                        <br><br>
                        <a href="#" class="w3ls-favorite w3ls-favoriate-like"> Make a reservation</a>
                        <div class="single-page-icons social-icons">
                            <ul>
                                <li><h4>Share on</h4></li>
                                <li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
                                <li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //modal -->
<?php
require_once('footer.php');
?>

