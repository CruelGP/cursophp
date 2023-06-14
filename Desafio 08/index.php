<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form retro</title>
    <link rel="stylesheet" href="../Global.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <?php 
        //Capturando os dados do forumários retroalimentado
        $numero = $_GET['numero']??1;
        $raiz = sqrt($numero);
        $cubo = ($numero ** (1/3));

        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="numero">Numero:</label>
        <input type="number" name="numero" id="numero" value="<?=$numero?>">
        <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            echo "<p>Analisando o número $numero, temos:</p>";
            echo "<p>A sua Raiz queadrada é ".number_format($raiz, 2, ",",".").".</p>";
            echo "<p>A sua raiza cúbica é  ".number_format($cubo, 2, ",",".").".</p></p>";
        ?>
    </section>
</body>
</html>