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
?>