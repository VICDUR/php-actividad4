
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $n =  (int) $_POST['numero'];
        
        $contador = 0;
        $resultado = '';
       
            while ($contador <= $n) {
                $resultado .= " $contador ";
                $contador++ ;
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
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7 Mostrar Numeros</h1>
    <p>Mostrar los números del 1 hasta el número que ingrese el usuario.</p>

    <div class="container"> 
        <form method="POST" action=""> 
            <label for="">Ingrese un numero </label><br>
            <input type="number" name="numero" id="numero" min="1" required ><br>
        
            <input type="submit">
        </form>
    </div>
    <div class="resultado">
        <p class="resultado"><?= $resultado ?? '' ?></p>
    </div>
    
</body>
</html>