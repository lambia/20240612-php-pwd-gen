<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWD Generator 0.9</title>
</head>
<body>

    <h1>Benvenuto in PWDGen 0.9</h1>
    <h2>Scegli la lunghezza della password da generare</h2>

    <form action="elabora.php" method="GET">
        <input type="number" required min="1" max="32" value="8" placeholder="Lunghezza" name="length" >
        <button type="submit">Genera</button>
    </form>
    
</body>
</html>