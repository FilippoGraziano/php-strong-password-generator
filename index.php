<?php

$password_lenght = 0;
if (isset($_GET['password_lenght']) && is_numeric($_GET['password_lenght']) && $_GET['password_lenght'] > 0) {

    $password_lenght = (int) $_GET['password_lenght'];
};

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

    $password = generateCasualPassword($password_lenght);

    echo strlen($password) != 0 ? "Questa è la password generata: $password" : "Genera una nuova password";

    ?>

</body>

</html>