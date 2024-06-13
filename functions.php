<?php

function generatePassword($length) {
    $dictionary = "abcdefghijklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_=";
    $ultimoIndiceDizionario = strlen($dictionary) - 1;

    $password = "";

    while( strlen($password) < $length ) {
        //aggiungi un carattere
        $numeroCasuale = rand(0, $ultimoIndiceDizionario);

        if( $dictionary[$numeroCasuale] == "<" ) {
            $password .= "&lt;";
        } else {
            $password .= $dictionary[$numeroCasuale];
        }
    
    }

    return $password;
}
