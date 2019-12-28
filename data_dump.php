<?php

$DB_HOST = "127.0.0.1";
$DB_USERNAME = "root";
$DB_PASSWORD = "root";
$DB_NAME = "mini_project";
$DB_PORT = "3306";

$connection = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, $DB_PORT);

   function SelectUsers()
   {
        global $connection;

        $query = "SELECT * FROM users" ;
        $select_user_query = mysqli_query($connection, $query);

        if (!$select_user_query) {
            die('QUERY FAILED'. mysqli_error($connection));
        }

        while ($row = mysqli_fetch_assoc($select_user_query)) {
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $gender = $row['gender'];
            $nationality = $row['nationality'];
            $passenger_no = $row['passenger_no'];
            $diet_pref = $row['diet_pref'];


            echo "<tr>";
            echo "<td>{$first_name}</td>";
            echo "<td>{$last_name}</td>";
            echo "<td>{$gender}</td>";
            echo "<td>{$nationality}</td>";
            echo "<td>{$passenger_no}</td>";
            echo "<td>{$diet_pref}</td>";
            echo "</tr>";

        }
   } 
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info</title>
</head>
<body>
    <div>
       <table style="border: 1px solid black">
            <thead>
                <tr>
                    <th>FirstName</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    <th>Nationality</th>
                    <th>Passenger No</th>
                    <th>Diet Pref</th>
                </tr>
                <tbody>
                    <?php
                        SelectUsers();
                    ?>
                </tbody>
            </thead>

       </table>
    </div>
</body>
</html>
