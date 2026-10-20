<?php

$password_lenght = 0;
if (isset($_GET['password_lenght']) && is_numeric($_GET['password_lenght']) && $_GET['password_lenght'] > 0) {

    $password_lenght = (int) $_GET['password_lenght'];
};

$numbersCheck = false;
if (isset($_GET["numbers"]) && $_GET["numbers"] == "on") {
    $numbersCheck = true;
}

$lettersCheck = false;
if (isset($_GET["letters"]) && $_GET["letters"] == "on") {
    $lettersCheck = true;
}

$symbolsCheck = false;
if (isset($_GET["symbols"]) && $_GET["symbols"] == "on") {
    $symbolsCheck = true;
}


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
            <input type="number" value="1" name="password_lenght" min="1">
        </label>

        <label>
            Only numbers
            <input type="checkbox" name="numbers">
        </label>

        <label>
            Only letters
            <input type="checkbox" name="letters">
        </label>

        <label>
            Symbols
            <input type="checkbox" name="symbols">
        </label>

        <button type="submit">Submit</button>

    </form>

    <?php

    $_SESSION["password"] = generateCasualPassword($password_lenght, $numbersCheck, $lettersCheck, $symbolsCheck);

    if ($_SESSION["password"] == "") {

        echo "You should generate a password";
    } else if (strlen($_SESSION["password"]) < 8) {

        echo "You should generate a password more safe, ";
        echo $password_lenght == 1 ? "$password_lenght charset" : "$password_lenght charsets";
        echo " it's too short";
    } else {

        echo "Your password was generated! </br>";
        echo "<a href='./result.php'>Go to see your password</a>";
    }

    ?>

</body>

</html>