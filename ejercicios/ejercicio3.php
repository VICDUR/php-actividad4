
<?php
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $numero =  (int) $_POST['numero'];
       
        if ($numero > 0){

                $contador = 1;
                $resultado = "";
                $numeroImpar = ($numero % 2 === 0) ? $numero + 1 : $numero ;
                
                while ($contador <= 10) {
                    
                    $resultado .= " $numeroImpar ";
                    $numeroImpar += 2;
                    $contador++;
                   
                }
           
        } } else {
             $resultado = 'El numero ingresado no es correcto';
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
    <h1>Ejercicio 3</h1>
    <p>Diseñar un programa que muestre el producto de los 10 primeros números impares.</p>

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
