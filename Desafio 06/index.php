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
        $dividendo = $_GET['d1']??0;
        $divisor = $_GET['d2']??1;
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="d1">Dividendo:</label>
        <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
        <label for="d2">Divisor:</label>
        <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">
        <input type="submit" value="Analisar">

        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            // echo "<ul>";
            // echo "<li>Dividendo: $dividendo</li>";
            // echo "<li>Divisor: $divisor</li>";
            // echo "<li>Quociente: $quociente</li>";
            // echo "<li>Resto: $resto</li>";
            // echo "</ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>

            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>