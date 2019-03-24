<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Businessman Profile</title>
    <style>
        body {
            background: linear-gradient(135deg, #f7f7f7, #C86DD7)
            background-attachment: fixed;
            font-size: 15px;
            font-family: "Helvetica Neue", Helvetica, Microsoft Yahei;
        }

        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        /*-----button-----------*/
        .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .navbar-toggle:focus {
            outline: none;
        }
        .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px;
        }
        .navbar-toggle .icon-bar + .icon-bar {
            margin-top: 4px;
        }

    </style>
</head>
<body style="background-color: mediumvioletred;">
<div class="title" style="margin-top: 80px;  text-align: center;"><h2>Businessman Review</h2></div>
<hr style="margin-bottom: 60px; width:60%;margin: auto;">
<table id = "customers" style="margin-bottom: 60px; width:80%;margin: auto;">
    <thead>
    <tr><th>NO</th>
        <th>Name</th>
        <th>Date and Time dined</th>
        <th>Party number</th>
        <th>Review</th>
        <th>Add comments</th>
        <th>Rating</th>
        <th>Received time</th>

    </tr>
    </thead>
    <?php
//--------------------------conncet database-------------------------------
    $conn = new mysqli("localhost", "root", "", "restaurantreview");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//------------------By received_ time, sort!------------------
//----------------The ORDER BY keyword is used to sort the result-set in ascending or descending order.--------------
//---------------The ORDER BY keyword sorts the records in ascending order by default.
//---------------- To sort the records in descending order, use the DESC keyword.
    $query = "SELECT * FROM businessman_review ORDER BY received_time DESC";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        $count = 1;
        while ($row = mysqli_fetch_array($result))
        {
            echo "
                                <tr>
                                    <td>".$count."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['date_time']."</td>
                                    <td>".$row['party_number']."</td>
                                    <td>".$row['review']."</td>
                                    <td>".$row['add_comments']."</td>
                                    <td>".$row['rating']."</td>
                                    <td>".$row['received_time']."</td> 
                                </tr>";
            $count++;
        }
    }
    ?>
</table>
</body>
</html>