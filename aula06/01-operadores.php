<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $preco = $_GET["p"];
    echo "O valor do produto é R$".number_format($preco, 2, ",", ".");
    $preco *= 1.1;
    echo "<br>O preco do produto com 10% é $preco";
    ?>
</div>
</body>
</html>
