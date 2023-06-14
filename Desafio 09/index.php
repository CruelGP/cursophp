<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio médias </title>
    <link rel="stylesheet" href="../Global.css">
</head>
<body>
    <section>
        <?php
        $v1 = $_GET['v1']??0;
        $v2 = $_GET['v2']??0;
        $ma = ($v1 + $v2) / 2;
        $p1 = $_GET['p1']??1;
        $p2 = $_GET['p2']??1;
        $mp  = ($v1*$p1 + $v2*$p2)/($p1+$p2);
        ?>

        <h1>Média aritimética e ponderáda</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

        <label for="v1">Valor 01:</label>
        <input type="number" name="v1" id="v1" value="<?=$v1?>">

        <label for="p1">Peso v1:</label>
        <input type="number" name="p1" id="p1" value="<?=$p1?>">

        <label for="v2">Valor 02:</label>
        <input type="number" name="v2" id="v2" value="<?=$v2?>">

        <label for="p2">Peso v1:</label>
        <input type="number" name="p2" id="p2"value="<?=$p2?>">

        <input type="submit" value="Calcular">
        </form>
    </section>

    <section>
        <h2>Resultado final</h2>
        <?php 
        echo "<p>A média aritmética entre $v1 e $v2 é igual a $ma</p>";
        echo "A média ponderada entre $v1 com peso $p1 e $v2 com peso $p2 é igual a $mp"
        ?>
    </section>

</body>
</html>