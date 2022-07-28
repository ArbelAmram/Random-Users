<?php

include_once('db.php');

// GET DATA FROM DB & DISPLAY

$sql_get = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql_get);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
    echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Name</th>";
        echo "<th>Age</th>";
        echo "<th>Country</th>";
        echo "<th>email</th>";
        echo "<th>Profile Picture</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)) {
        $url = "https://countryflagsapi.com/png/";
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . "<img src=".$url.$row['country'].' width=80px height="80px">' . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . "<img src=".$row['profile_pic'].' width=80px height="80px">' . "</td>";
        echo "</tr>";
    }
}