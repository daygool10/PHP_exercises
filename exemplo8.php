<?php
// dados coluna 0 - codigo
$dadosProduto[0][0] = 1;
$dadosProduto[1][0] = 2;
$dadosProduto[2][0] = 3;
$dadosProduto[3][0] = 4;
$dadosProduto[4][0] = 5;

// dados da coluna 1 - produto
$dadosProduto[0][1] = "Banana";
$dadosProduto[1][1] = "Maçã";
$dadosProduto[2][1] = "Mamão";
$dadosProduto[3][1] = "Melão";
$dadosProduto[4][1] = "Caju";

// dados coluna 2
$dadosProduto[0][2] = 10.50;
$dadosProduto[1][2] = 15.99;
$dadosProduto[2][2] = 25.50;
$dadosProduto[3][2] = 30.50;
$dadosProduto[4][2] = 45.99;

echo "<h2>Detalhes do produto</h2>";
echo 'Código: ' . $dadosProduto[4][0] . ' <br>';
echo 'Produto: ' . $dadosProduto[4][1] . ' <br>';
echo 'Valor: ' . $dadosProduto[4][2] . ' <br>';


?>