
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $numero = $_POST['numero'];

        if (is_numeric($numero) && $numero > 0){
            $cuadrado = $numero * $numero;
            $resultado = "EL cuadrado del numero $numero es: $cuadrado";
        } else {
            $resultado = 'Por favor ingrese un valor correcto o numero que no sea negativo';
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ejercicio.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <p>Leer un número y mostrar su cuadrado, repetir el proceso hasta que se introduzca un número negativo.</p>

    <div class="container"> 
        <form method="POST" action="">
            <label for="">Ingrese un numero</label>
            <input type="number" name="numero" id="numero">
            <input type="submit">
        </form>
    </div>
    <div class="resultado">
        <p class="resultado"><?= $resultado ?? '' ?></p>
    </div>
    
</body>
</html>
