<?php

function generatePassword($dictionary, $length) {

    //dizionario adesso ci viene passato già popolato
    //bisogna solo calcolare quanti caratteri contiene
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
