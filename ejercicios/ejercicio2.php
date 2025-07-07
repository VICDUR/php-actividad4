
<?php
    // se crea la seccion para guardar el numeroAdivinar 1 - 100
    session_start();
    // si no existe numero adivinar se crea y se guarda
    if(!isset($_SESSION['numeroAdivinar'])){
        $_SESSION['numeroAdivinar'] = rand(1,100);
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $numero = (int) $_POST['numero'];
       
        //usamos el numero fijo
       $numeroAdivinar = $_SESSION['numeroAdivinar'];
        
        if (is_numeric($numero) && $numero === $numeroAdivinar){

            $resultado = "🎉 Adivinaste el numero es: $numeroAdivinar";
            unset($_SESSION['numeroAdivinar']);

        } elseif ($numeroAdivinar < $numero) {

            $resultado = '🔻 El número es menor.';

        } else {

            $resultado = '🔺 El número es mayor.';
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
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <p>Realizar un juego para adivinar un número. Para ello pedir un número N, y luego ir pidiendo números indicando “mayor” o “menor” según sea mayor o menor con respecto a N. El proceso termina cuando el usuario acierta.</p>

    <div class="container"> 
        <form method="POST" action="">
            <!-- <h3><?= $_SESSION['numeroAdivinar'] ?? "" ?></h3> -->
            <label for="">Ingrese el numero adivinar</label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit">
        </form>
    </div>
    <div class="resultado">
        <p><?= $resultado ?? '' ?></p>
    </div>
    
</body>
</html>
