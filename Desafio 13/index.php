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
        $valor = $_GET['valor'];

        $resto = $valor;

        $tot100 = floor($resto / 100);
        $resto %= 100;

        $tot50 = floor($resto / 50);
        $resto %= 50;

        $tot10 = floor($resto / 10);
        $resto %= 10;

        $tot05 = floor($resto / 5);
        ?>

        <h1>Calculando o tempo em segundos</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

        <label for="valor">Qual valor deseja sacar?:</label>
        <input type="number" name="valor" id="valor" value="<?=$valor?>">

        <input type="submit" value="Sacar">
        </form>
    </section>

    <section>
        <h2>Resultado final</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <td>
                <li><img src="./imagem/100-reais.jpg" alt=""> <?php echo "$tot100"?></li>
                <li> <img src="./imagem/50-reais.jpg" alt=""><?php echo "$tot50"?></li>
                <li> <img src="./imagem/10-reais.jpg" alt=""><?php echo "$tot10"?></li>
                <li> <img src="./imagem/5-reais.jpg" alt=""><?php echo "$tot05"?></li>
                li> <img src="./imagem/" alt=""><?php echo "$tot05"?></li>
            </td>
        </ul>
    </section>

</body>
</html>