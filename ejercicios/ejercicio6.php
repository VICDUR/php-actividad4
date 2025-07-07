
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $n =  (int) $_POST['numero'];
        
        $contador = 1;
        $resultado = '';
        if( $n > 0 && $n <= 10){
            while ($contador <= 10) {
                $multiplicacion = " $n x $contador = ". ($n * $contador). "<br>";
                $resultado .= $multiplicacion ;
                $contador++ ;
            }
        }else{
            $resultado = "Ingrese un numero que este en el rango permitido";
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
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6 Tabla de Multiplicar</h1>
    <p>Pide un número (que debe estar entre 0 y 10) y muestra la tabla de multiplicar de dicho número.</p>

    <div class="container"> 
        <form method="POST" action=""> 
            <label for="">Ingrese un numero, entre 1 y 10 </label><br>
            <input type="number" name="numero" id="numero" required ><br>
        
            <input type="submit">
        </form>
    </div>
    <div class="resultado">

    </div>
    <p><?= $resultado ?? '' ?></p>
    
</body>
</html>