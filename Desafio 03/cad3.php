<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<main>
    <h1> Conversor de Moedas v1.0</h1>
    <?php
        $valor = $_GET["valor"];
        $dolar = 0.2049 * $valor;
        $euro = 0.1904 * $valor;
        echo "<p>Seus <strong>$valor</strong> equivalem a <strong>$euro</strong> Euros.</p>";
        echo "<p>Seus <strong> $valor</strong> equivalem <strong>$dolar</strong> Dolares.</p>";
        echo "<p>Cotação do dolar <strong>4.88</strong> Real brasileiro.</p>";
        echo "<p>Cotação do euro <strong>5.25</strong> Real brasileiro.</p>";
    ?>
</main>
</body>
</html>