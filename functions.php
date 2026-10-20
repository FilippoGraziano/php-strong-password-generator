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
            // casual number from 0 to 9
            rand(0, 9),
            // casual symbol
            $symbols[rand(0, strlen($symbols) - 1)]
        ];

        $password .= $casualFunctions[rand(0, count($casualFunctions) - 1)];
    }

    return $password;
};

function generateCasualNumbers(string $passwordLenght) {
    $password = "";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $password .= rand(0, 9);

    }

    return $password;
};

function generateCasualLetters(string $passwordLenght) {
    $password = "";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $casualLetters = [
            // casual lower case letter
            chr(rand(97, 122)),
            // casual upper case letter
            chr(rand(65, 90))
        ];

        $password .= $casualLetters[rand(0, count($casualLetters) - 1)];

    }

    return $password;
};

function generateCasualSymbols(string $passwordLenght) {

    $symbols = "!,.-_";
    $password = "";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $password .= $symbols[rand(0, strlen($symbols) - 1)];

    }

    return $password;
};

function generateCasualNumbersSymbols(string $passwordLenght) {

    $symbols = "!,.-_";
    $password = "";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $casualNumberSymbol = [
            // casual number from 0 to 9
            rand(0, 9),
            // casual symbol
            $symbols[rand(0, strlen($symbols) - 1)]
        ];

        $password .= $casualNumberSymbol[rand(0, count($casualNumberSymbol) - 1)];

    }

    return $password;
};

function generateCasualNumbersLetters(string $passwordLenght) {

    $password = "";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $casualNumberLetters = [
            // casual number from 0 to 9
            rand(0, 9),
            // casual lower case letter
            chr(rand(97, 122)),
            // casual upper case letter
            chr(rand(65, 90))
        ];

        $password .= $casualNumberLetters[rand(0, count($casualNumberLetters) - 1)];

    }

    return $password;
};

function generateCasualLettersSymbols(string $passwordLenght) {

    $symbols = "!,.-_";
    $password = "";

    for ($i = 0; $i < $passwordLenght; $i++) {

        $casualNumberSymbols = [
            // casual symbols
            $symbols[rand(0, strlen($symbols) - 1)],
            // casual lower case letter
            chr(rand(97, 122)),
            // casual upper case letter
            chr(rand(65, 90))
        ];

        $password .= $casualNumberSymbols[rand(0, count($casualNumberSymbols) - 1)];

    }

    return $password;
};
