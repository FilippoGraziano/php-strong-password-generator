<?php

function generateCasualPassword(string $passwordLenght, bool $numbersCheck, bool $lettersCheck, bool $symbolsCheck) {

    $password = "";

    $pool = "";
    if ($numbersCheck) $pool .= "0123456789";
    if ($lettersCheck) $pool .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    if ($symbolsCheck) $pool .= "!,.-_?$&\£/@";

    if ($pool == "") $pool = "0123456789!,.-_?$&\£/@abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $password .= $pool[rand(0, strlen($pool) - 1)];
    }

    return $password;

}

?>