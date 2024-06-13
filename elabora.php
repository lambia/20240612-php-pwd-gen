<?php
$dictionary = "abcdefghijklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_=";
$length = $_GET["length"];
$password = "";

// Per "lenght" volte
// for ($i=0; $i < $length; $i++) { 
//     //aggiungi un carattere
//     $password .= "X";
// }

// finchè la password non è lunga "length" caratteri
while( strlen($password) < $length ) {
    //aggiungi un carattere
    $ultimoIndiceDizionario = strlen($dictionary) - 1;
    $numeroCasuale = rand(0, $ultimoIndiceDizionario);

    $password .= $dictionary[$numeroCasuale];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Benvenuto in PWDGen 0.9</h1>
    <h2>La tua password è: <?= $password ?></h2>
    <h3>Hai richiesto una password lunga <?= $length ?> caratteri</h3>

</body>

</html>