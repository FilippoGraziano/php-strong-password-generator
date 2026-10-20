<?php

$password_lenght = 0;
if (isset($_GET['password_lenght']) && is_numeric($_GET['password_lenght']) && $_GET['password_lenght'] > 0) {

    $password_lenght = (int) $_GET['password_lenght'];
};

session_start();

require_once "./functions.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>
</head>

<body>
    <h1>Generate a casual password</h1>

    <form module="GET">

        <label>
            Insert the lenght for the password:
            <input type="number" name="password_lenght" min="1">
        </label>

        <button type="submit">Submit</button>

    </form>

    <?php

    $_SESSION["password"] = generateCasualPassword($password_lenght);

    if ($_SESSION["password"] == "") {

        echo "You shold generate a password";

    } else if (strlen($_SESSION["password"]) < 8) {
        
        echo "You should generate a password more safe, ";
        echo $password_lenght == 1 ? "$password_lenght charset" : "$password_lenght charsets";
        echo " it's too short";

    } else {

        echo "Your password was generated! </br>";
        echo "<a href='./result.php'>Go to Show your password</a>";

    }

    ?>

</body>

</html>