<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório</title>
    <link rel="stylesheet" href="../Global.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatório</h1>
        <?php 
        $rand = mt_rand(0,100);
        echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
        echo "<p>O valor gerado foi $rand</p>";
        ?>
        <form action="index.php">
            <input type="submit" value="Gerar outro">
        </form>
    </section>
</body>
</html>