<?php

$DB_HOST = "127.0.0.1";
$DB_USERNAME = "root";
$DB_PASSWORD = "root";
$DB_NAME = "mini_project";
$DB_PORT = "3306";

$connection = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, $DB_PORT);

if (isset($_POST['submit'])) {

    print_r($_POST);
    // $user_id = $_GET['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $passenger_no = $_POST['passenger_no'];
    $diet_pref = $_POST['diet_pref'];

    
    $query = "INSERT INTO users (first_name, last_name, gender, nationality, passenger_no, diet_pref) VALUES ('{$first_name}', '{$last_name}', '{$gender}', '{$nationality}', '{$passenger_no}', '{$diet_pref}')" ;
    $create_user_query = mysqli_query($connection, $query);

    if (!$create_user_query) {
        die('QUERY FAILED'. mysqli_error($connection));
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
    <div class="info">
        <form role= "form" action="" method="post" id="info">
            <div class="form-group">
                <label for="first_name">Firstname: </label>
                <input type="text" name="first_name">
            </div>
            <br>
            <div>     
                <label for="last_name">Lastname: </label>
                <input type="text" name="last_name">  
            </div>
            <br>
            <div>
                <label for="salutation"> Select yout salutation: </label>
                <select name="salutation" id="salutation">
                    <option value="mr">Mr</option>
                    <option value="mrs">Mrs</option>
                    <option value="none">None</option>
                </select>
            </div>
            <br>
            <div>
                <label for="passengers" value="0">How many people are flying with you?</label>
                <input type="number" name="passenger_no" min="0" max="10">
            </div>
            <br>
            <div>
                <label for="nationality">Are you an Indian?</label>
                <input type="radio" name="nationality" value="true">True 
                <input type="radio" name="nationality" value="false">False 
            </div>
            <br>
            <div>
                <label for="gender">Define your gender:</label>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </div>
            <br>
            <div>
                <label for="diet">Your diet preference: </label>
                <select name="diet_pref">
                    <option value="vegan">Vegan</option>
                    <option value="Lacto Vegetarian(includes dairy)">Lacto Vegetarian(includes dairy)</option>
                    <option value="Ovo Vegetarian(includes eggs)">Ovo Vegetarian(includes eggs)</option>
                    <option value="Pescatarian(includes fish)">Pescatarian(includes fish)</option>
                </select>
            </div>
            <br>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
    <br>
    <button style="background-color: #4CAF50;"><a href="data_dump.php">Get Data</a></button>
</body>
</html>
