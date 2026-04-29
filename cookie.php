<?php
setcookie("usuario", "Michael", time() +86400);
?>
<html>
    <body>
        <?php
        if (isset($_COOKIE["usuario"]))
        echo "Bem vindo " . $_COOKIE["usuario"] . "!<br>";
        else 
            echo "usuario novo, seja bem vindo!<br>";
        ?>
    </body>
</html>