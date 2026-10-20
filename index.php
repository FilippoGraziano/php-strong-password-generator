<?php

$password_lenght = 0;
if (isset($_GET['password_lenght']) && is_numeric($_GET['password_lenght']) && $_GET['password_lenght'] > 0) {

    $password_lenght = (int) $_GET['password_lenght'];
};


function generateCasualPassword(string $passwordLenght) {

    $symbols = "!,.-_";
    $password = "";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $casualFunctions = [
            // casual lower case letter
            chr(rand(97, 122)),
            // casual upper case letter
            chr(rand(65, 90)),
            // casual number from 0 to 99
            rand(0, 99),
            // casual symbol
            $symbols[rand(0, strlen($symbols) - 1)]
        ];

        $password .= $casualFunctions[rand(0, count($casualFunctions) - 1)];

    }

    return $password;
};

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