<?php
    $nome = $_GET["n"];
    $idade = $_GET["i"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        echo "<div style='background-color:green;'>";
        echo"Hello world";
        echo"<br/>";
        echo '<h2>Meu nome é '. $nome. ' Tenho ' . $idade .' anos.</h2>';
        echo "<div>";

    ?>
</body>
</html>