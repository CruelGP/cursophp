<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Global.css">
</head>
<body>

    <?php
        $valor = $_GET['valor'] ?? 0;
        $porcento = $_GET['porcento'] ?? 0;
        $res = ($porcento / 100 * $valor) + $valor
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Ano de nascimento:</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>">
            <label for="porcento">Qual será o porcentual de reajuste? <span id="por">?</span>%: </label>
            <input type="range" name="porcento" id="porcento" min="0" max="100" value="0" oninput="mudaValor()">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
    <h2>Resultado</h2>
    <p>O produto que custava <strong>R$<?php echo number_format($valor,2, ",",".")?></strong> com <strong><?php echo "$porcento%"?></strong> de aumento vai passa a custar <strong>R$<?php echo number_format($res,2, ",",".")?></strong></p>
    </section>

    <script>
        mudaValor()
        function mudaValor() {
             por.innerText = porcento.value
            }
    </script>
</body>
</html>