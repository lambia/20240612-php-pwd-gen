<?php
include __DIR__ . "/functions.php";

if( isset($_GET["length"]) ) {

    //minuscole sempre presenti, obbligatorie
    $dizionario = "abcdefghijklmnopqrstuvwxyz";
    
    if( isset($_GET["maiuscole"]) ) {
        $dizionario .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }

    if( isset($_GET["numeri"]) ) {
        $dizionario .= "0123456789";
    }
        
    if( isset($_GET["simboli"]) ) {
        $dizionario .= "!?&%$<>^+-*/()[]{}@#_=";
    }
    
    // $length = $_GET["length"];
    $password = generatePassword( $dizionario, $_GET["length"] );
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Generator 0.9</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <h1>Benvenuto in PWDGen 0.9</h1>

    <?php
    /*
    if( isset($password) ) {
        echo "<h2>La tua nuova password è: </h2><p>$password</p>";
    }
    */
    ?>

    <?php if( isset($password) ) { ?>

        <h2>La tua nuova password è: </h2>
        <p><?= $password ?></p>

    <?php } ?>

    <h2>Scegli la lunghezza della nuova password da generare</h2>
    <form action="form.php" method="GET">
        <div>
            <p>Caratteri consentiti: </p>
            <label><input type="checkbox" name="minuscole" checked disabled> minuscole</label>
            <label><input type="checkbox" name="maiuscole"> maiuscole</label>
            <label><input type="checkbox" name="numeri"> numeri</label>
            <label><input type="checkbox" name="simboli" > simboli</label>
        </div>
        <input type="number" required min="1" max="32" placeholder="Lunghezza" name="length" >
        <button type="submit">Genera</button>
    </form>
    
</body>
</html>