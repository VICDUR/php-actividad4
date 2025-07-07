<?php
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $facturas = [];

    for ($i = 1; $i <= 5; $i++) {
        $cod = (int) $_POST["cod$i"];
        $cant = (int) $_POST["cant_lt$i"];
        $precio = (int) $_POST["precio_lt$i"];
        $total = $cant * $precio;

        $facturas[] = [
            'cod' => $cod,
            'litros' => $cant,
            'precio' => $precio,
            'total' => $total
        ];
    }

    $facturacion_total = array_sum(array_column($facturas, 'total'));

    $litros_cod1 = 0;
    foreach ($facturas as $factura) {
        if ($factura['cod'] === 1) {
            $litros_cod1 += $factura['litros'];
        }
    }

    $mayores_600k = 0;
    foreach ($facturas as $factura) {
        if ($factura['total'] > 600000) {
            $mayores_600k++;
        }
    }

    $resultado = "
        <div class='factura'>
            <h2>Resumen</h2>
            <p>🧾 Facturación total: <strong>$$facturacion_total</strong></p>
            <p>🛢️ Litros vendidos del artículo código 1: <strong>$litros_cod1 Lts</strong></p>
            <p>📈 Facturas mayores a $600.000: <strong>$mayores_600k</strong></p>
        </div>
    ";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ejercicio8.css">
</head>
<body>

    <h1>Ejercicio 8 - Gestión de Facturas</h1>
    <p>Una empresa que se dedica a la venta de desinfectantes necesita un programa para gestionar las facturas.
    En cada factura se debe registrar: el código del artículo, la cantidad vendida en litros y el precio por litro.
    A partir de la entrada de 5 facturas, se solicita calcular e informar: </p>

    <ul>
        <li>La facturación total (suma del precio de todas las facturas).</li>
        <li>La cantidad total de litros vendidos del artículo con código 1.</li>
        <li>Cuántas facturas superaron una venta de $600.000</li>
    </ul>

    <div class="container"> 
        <form method="POST" action=""> 
            <div class="cards-y-resumen">
                <div class="cards-facturas">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <div class="factura">
                            <h2>Factura <?= $i ?></h2>
                            <div class="form-row">
                                <label>Código artículo:</label>
                                <input type="number" name="cod<?= $i ?>" min="1" required>
                            </div>
                            <div class="form-row">
                                <label>Litros vendidos:</label>
                                <input type="number" name="cant_lt<?= $i ?>" min="1" required>
                            </div>
                            <div class="form-row">
                                <label>Precio por litro:</label>
                                <input type="number" name="precio_lt<?= $i ?>" min="1" required>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <div class="resultado">
                    <?= $resultado ?>
                </div>
            </div>
            <input type="submit" value="Calcular resumen">
        </form>
    </div>

</body>
</html>