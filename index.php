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
            <select name="salutation" id="" value="mr">
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
            <input type="radio" name="nationality" >False 
        </div>
        <br>
        <div>
            <label for="gender" id="">Define your gender:</label>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
        </div>
        <br>
        <div>
            <label for="diet">Your diet preference: </label>
            <select name="diet_pref" value="3">
                <option value="" selected disabled hidden>Choose here</option>
                <option value="vegan">Vegan</option>
                <option value="Lacto Vegetarian(includes dairy)">Lacto Vegetarian(includes dairy)</option>
                <option value="Ovo Vegetarian(includes eggs)">Ovo Vegetarian(includes eggs)</option>
                <option value="Pescatarian(includes fish)">Pescatarian(includes fish)</option>
            </select>
        </div>
        <br>
        <input type="submit" value="submit" name="submit">
    </div>
    </form>
</body>
</html>
