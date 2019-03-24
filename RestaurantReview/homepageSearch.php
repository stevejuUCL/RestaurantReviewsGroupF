<title>Search</title>

<?php
require_once('header.php');
?>
<br><br><br><br><br>
<?php
/**
 * Created by PhpStorm.
 * User: steveju
 * Date: 2019-03-24
 * Time: 02:46
 */
require_once('PHP_Database/phpDatabaseConnection.php');

    $search = $_POST['Search'];

    $qrySearch = "SELECT * FROM restaurant WHERE name LIKE '%$Search%'";

    $searchResult = mysqli_query($connection, $qrySearch);

    if (mysqli_num_rows(￥searchResult) > 0) {
        echo $searchResult;
    }else {
        echo "<h3 style='text-align:center'>Sorry, restaurant not found.😢<h3>";
    }
?>
<br><br><br><br><br>
<?php
require_once('footer.php');
?>

