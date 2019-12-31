<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Info</title>
</head>
<body>
    Hi <?php echo $_POST['salutation'] === 'none' ? ($_POST['first_name'] . ' ' . $_POST['last_name']) : ($_POST['salutation'] . ' '. $_POST['first_name'] .' '. $_POST['last_name']);
            ?>.

    To welcome onboard you've given this info. You're <?php echo $_POST['gender'] ?> and want to eat <?php echo $_POST['diet_pref'] ?>. Also you're accompanied with <?php echo $_POST['passenger_no'] ?> more people.
    
    <?php 
        if ($_POST['nationality'] !== 'true') {
            echo "Your nationality is other than Indian.";
        } else {
            echo "Your nationality is Indian!";
        }
    ?>
</body>
</html>