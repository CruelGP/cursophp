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
        // $valor = $_GET["valor"];
        // $dolar = 0.2049 * $valor;
        // $euro = 0.1904 * $valor;
        // echo "<p>Seus <strong>R\$$valor</strong> equivalem a <strong> EUR $euro</strong> Euros.</p>";
        // echo "<p>Seus <strong>R\$ $valor</strong> equivalem <strong>US\$$dolar</strong> Dolares.</p>";
        // echo "<p>Cotação do dolar <strong>R\$4.88</strong> Real brasileiro.</p>";
        // echo "<p>Cotação do euro <strong>R\$5.25</strong> Real brasileiro.</p>";

        $padrao = numfmt_create("pt-BR" , NumberFormatter::CURRENCY);
        $valor = $_GET["valor"];
        $dolar = 0.2049 * $valor;
        $euro = 0.1904 * $valor;

        echo "Seus ".numfmt_format_currency($padrao, $valor, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $dolar,"USD" ) . " Dolares.";


    ?>
</main>
</body>
</html>