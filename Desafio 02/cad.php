<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Resultado final!</h1>
        <?php 
        
        $numero = $_GET["numero"] ?? "Digita um número palhaço!!";
        $soma = $numero + 1;
        $sub = $numero - 1;
        echo "<p>O número escolhido foi o <strong>$numero</strong>.</p>";

        echo "<p>Antes dele vem o número: <strong>$sub</strong>.</p>";

        echo "<p>E depois dele vem o número: <strong>$soma</strong></p>";
        ?>
        <p><a href="javascript:history.go(-1)">Volte para Página anterior!</a></p>
    </main>
</body>
</html>