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
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? $atual;
        $ano = $_GET['qano'] ?? $atual;
        $idade = $ano - $nasc;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Ano de nascimento:</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">
            <label for="qidade">Sua idade em:</label>
            <input type="number" name="qano" id="qano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
    <h2>Resultado</h2>
    <p>Quem nasceu em <strong>[<?php echo "$nasc"?>]</strong> vai ter <strong>[<?php echo "$idade"?>]</strong> anos em <strong>[<?php echo "$ano"?>]</strong>!</p>
    </section>

</body>
</html>