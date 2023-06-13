<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form retro</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <?php 
        //Capturando os dados do forumários retroalimentado
        $salario = $_GET['salario']??0;
        $minimo = 1500;
        $div = intdiv($salario, $minimo);
        $sobra = $salario % $minimo;
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="salario">Salário:</label>
        <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
        <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
        echo "Quem recebe um salário de R\$". number_format($salario, 2,",",".")." ganha R\$$div Salários minimos + R\$".number_format($sobra, 2,",",".");
        ?>
    </section>
</body>
</html>