
<?php
    $resultado = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $numero =  (int) $_POST['numero'];
       
        if ($numero > 0){

                $factorial = 1;

            for ($i = $numero; $i > 1 ; $i--) { 
                    $factorial *= $i;
           }
            $resultado = "El factorial de $numero es :  $factorial";
        } else {
            $resultado = 'El numero ingresado no es correcto';
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
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <p>Pedir un número y calcular su factorial.</p>

    <div class="container"> 
        <form method="POST" action=""> 
            <label for="">Ingrese un numero </label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit">
        </form>
    </div>
    <div class="resultado">
        <p><?= $resultado ?? '' ?></p>
    </div>
    
</body>
</html>
