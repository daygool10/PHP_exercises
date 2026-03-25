<?php
$texto = "<p>Este é o quarto parágrafo</p>";
?>

<html>
    <head>
        <title>Exercício 4 de PHP</title>
    </head>
    <body>
        <h1>Exercício 4 de PHP - Misturando códigos</h1>
        <p>Este é o primeiro parágrafo</p>
        <p><?php echo "Este é o segundo parágrafo"; ?></p>
        <p>Este é o terceiro parágrafo</p>
        <?php echo $texto; ?>
    </body>
</html>