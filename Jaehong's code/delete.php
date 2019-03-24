<!--Use Get method to delete -->
<!--receive the parameter with the added url-->
<?php
if (isset($_GET['id'])) {
    echo $_GET['id'];
}

if($_GET)
{
    $id = $_GET['id'];
    echo $id;
    $conn = new mysqli("localhost", "root", "", "restaurantreview");
    if ($conn->connect_error)
    { die("Connection failed: " . $conn->connect_error);   }

    $sql = "DELETE FROM reservation WHERE id=$id";

    if ($conn->query($sql) === TRUE)
    {
        header("Location: reservation.php");
        echo "<meta http-equiv='refresh' content='0'>";
    }


}
?>
