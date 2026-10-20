<?php

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