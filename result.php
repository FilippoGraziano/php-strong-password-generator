<?php

session_start();

$password = $_SESSION["password"];

require_once "./functions.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password result</title>
</head>

<body>

    <h1>Password</h1>

    <?php
    
    echo "This is the generated password: $password";

    ?>

</body>

</html>