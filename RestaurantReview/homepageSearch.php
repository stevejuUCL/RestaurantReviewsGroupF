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
        <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Type</th>
            <th>Price</th>
            <th></th>
        </tr>
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
                echo "<th>".$row["name"]."</th>".
                     "<th>".$row["contactNumber"]."</th>".
                     "<th>".$row["address"]."</th>".
                     "<th>".$row["typeOfCuisine"]."</th>".
                     "<th>".$row["priceRange"]."</th>".
                     "<th><a href=\"#\" style='color: #ffffff'>Make a reservation</a></th>";
            }
        } else {
            echo "<h3 style='text-align:center'>Sorry, restaurant not found.😢<h3>";
        }
        ?>
    </table>
    </p>
</div>
<br><br><br><br><br>
<?php
require_once('footer.php');
?>

