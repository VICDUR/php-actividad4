
<?php

    $resultado = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $n1 =  (int) $_POST['numero1'];
        $n2 =  (int) $_POST['numero2'];
        $n3 =  (int) $_POST['numero3'];
        $n4 =  (int) $_POST['numero4'];
        $n5 =  (int) $_POST['numero5'];
        $n6 =  (int) $_POST['numero6'];
        $n7 =  (int) $_POST['numero7'];
        $n8 =  (int) $_POST['numero8'];
        $n9 =  (int) $_POST['numero9'];
        $n10 =  (int) $_POST['numero10'];
       
        $numeros = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10];
        $numNegative = 0; 
        $sumNegative = 0; 

        $numPositive = 0; 
        $sumPositive = 0; 

        foreach ( $numeros as $numero ){

            if( $numero < 0 ){
                $sumNegative+= $numero;
                $numNegative++ ;

            }else{
                $sumPositive+= $numero;
                $numPositive++ ;
            }
        }
        $mediaPositive = ($sumPositive > 0) ? $sumPositive / $numPositive : 0;
        $mediaNegative = ($sumNegative < 0) ? $sumNegative / $numNegative : 0;
        $resultado  = ($numNegative != 0 && $numPositive != 0) 
                        ? "La media de numeros positivos es : $mediaPositive y la media de numeros negativos es : $mediaNegative"
                        : (($numNegative != 0)
                                ? "La media de numeros negativos es : $mediaNegative"
                                : "La media de numeros positivos es : $mediaPositive"
                            );
                
    }    
        
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ejercicio.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <p>Pedir 10 números. Mostrar la media de los números positivos, la media de los números negativos</p>

    <div class="container"> 
        <form method="POST" action=""> 
            <label for="">Ingrese 10 numero, entre positivos y negativos </label><br>
            <input type="number" name="numero1" id="numero" required><br>
            <input type="number" name="numero2" id="numero" required><br>
            <input type="number" name="numero3" id="numero" required><br>
            <input type="number" name="numero4" id="numero" required><br>
            <input type="number" name="numero5" id="numero" required><br>
            <input type="number" name="numero6" id="numero" required><br>
            <input type="number" name="numero7" id="numero" required><br>
            <input type="number" name="numero8" id="numero" required><br>
            <input type="number" name="numero9" id="numero" required><br>
            <input type="number" name="numero10" id="numero" required><br>
            <input type="submit">
        </form>
    </div>
    <div class="resultado">
        <p><?= $resultado ?? '' ?></p>
    </div>
    
</body>
</html>
