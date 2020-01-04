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
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Info</title>
</head>
<body class="">
    <div class="w-full flex justify-center px-8 pt-20 pb-8 mb-4">
        <form role= "form" action="info.php" method="post" id="info" class="shadow-md border-solid border-2 border-gray-600 p-8 rounded-lg">
            <div class="flex justify-center content-between flex-wrap h-36">
                <div class="pr-8">
                    <input class= "border-b-2 border-gray-600 rounded-full py-2 px-4" type="text" name="first_name" placeholder="firstname">
                </div>
                <div>     
                    <input class="border-b-2 border-gray-600 rounded-full py-2 px-4" type="text" name="last_name" placeholder="lastname">  
                </div>
            </div>
           
           
            <br>
            <div class="flex">
                <label for="salutation" class="my-auto"> Select yout salutation </label>
                <div class="inline-block relative">
                    <select name="salutation" id="salutation" class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 ml-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="none">None</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                 </div>
            </div>
            <br>
            <div class="flex">
                <label for="passengers" value="0" class="my-auto">How many people are flying with you?</label>
                <div class="inline-block relative">
                    <input type="number" name="passenger_no" min="0" max="10" class="block appearance-none bg-white border-dray-400 hover:border-gray-500 px-4 py-2 ml-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                </div>
            </div>
            <br>
            <div>
                <label for="nationality" class="my-auto">Are you an Indian?</label>
                <input type="radio" name="nationality" value="true"> True 
                <input type="radio" name="nationality" value="false"> False 
            </div>
            <br>
            <div>
                <label for="gender">Define your gender</label>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
            </div>
            <br>
            <div class="flex">
                <label for="diet" class="my-auto">Your diet preference </label>
                <div class="inline-block relative">
                    <select name="diet_pref" class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 ml-4 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="vegan">Vegan</option>
                        <option value="Lacto Vegetarian(includes dairy)">Lacto Vegetarian(includes dairy)</option>
                        <option value="Ovo Vegetarian(includes eggs)">Ovo Vegetarian(includes eggs)</option>
                        <option value="Pescatarian(includes fish)">Pescatarian(includes fish)</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <br>
            <div class="flex justify-center">
                <button name="submit" value="submit" type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow justify-center">
                    Submit
                </button>
            </div>
            
        </form>
    </div>

    <div class="flex justify-center my-8">
        <a href="data_dump.php">    
            <button class=" rounded-full py-2 px-4 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                <span>Data</span>
            </button>
        </a>
    </div>
</body>
</html>
