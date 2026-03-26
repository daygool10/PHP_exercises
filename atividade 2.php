<?php

$livros = array(
    array("codigo" => 8282, "livro" => "PHP", "autor" => "Marcos de Melo", "paginas" => 360),
    array("codigo" => 8283, "livro" => "HTML5", "autor" => "Ernandes Silva", "paginas" => 266),
    array("codigo" => 8284, "livro" => "jQuery", "autor" => "Nicoly Almeida", "paginas" => 159),
    array("codigo" => 8285, "livro" => "CSS", "autor" => "Juliana Aparecida", "paginas" => 123)
);

echo "<table border='1'>";
echo "<tr>
        <th>codigo</th>
        <th>livros</th>
        <th>autor</th>
        <th>paginas</th>
      </tr>";

foreach ($livros as $livro) {
    echo "<tr>";
    echo "<td>" . $livro["codigo"] . "</td>";
    echo "<td>" . $livro["livro"] . "</td>";
    echo "<td>" . $livro["autor"] . "</td>";
    echo "<td>" . $livro["paginas"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>