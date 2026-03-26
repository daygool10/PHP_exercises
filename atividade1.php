<?php

$livro = array(
    "Código" => 8282,
    "Livros" => "PHP - Páginas dinâmicas",
    "Autor" => "Marcos de Melo",
    "Páginas" => 360
);

echo "<table border='1'>";
echo "<tr>";

foreach ($livro as $chave => $valor) {
    echo "<th>$chave</th>";
}

echo "</tr><tr>";

foreach ($livro as $valor) {
    echo "<td>$valor</td>";
}

echo "</tr>";
echo "</table>";

?>