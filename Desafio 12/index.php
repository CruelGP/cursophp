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
        $sobra = $valor;

        $semana = (int) ($sobra / 604_800);
        $sobra = $sobra % 604_800;

        $dia = (int) ($sobra / 86_400);
        $sobra = $sobra % 86_400;

        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 60;

        $minuto = (int) ($sobra / 60);
        $sobra = $sobra % 60;

        $segundo = $sobra;
        ?>

        <h1>Calculando o tempo em segundos</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">

        <label for="valor">Qual é o total de segundos:</label>
        <input type="number" name="valor" id="valor" value="<?=$valor?>">

        <input type="submit" value="Calcular">
        </form>
    </section>

    <section>
        <h2>Resultado final</h2>
        <p>Analisando o valor que vc digitou <strong><?php echo number_format($valor,0,",",".")?></strong> segundos equivalem a um total de:</p>
        <ul>
            <td>
                <li><strong><?php echo "$semana"?></strong> semanas.</li>
                <li><strong><?php echo "$dia"?></strong> dias.</li>
                <li><strong><?php echo "$hora"?></strong> horas.</li>
                <li><strong><?php echo "$minuto"?></strong> minutos.</li>
                <li><strong><?php echo "$segundo"?></strong> segundos.</li>
            </td>
        </ul>
    </section>

</body>
</html>