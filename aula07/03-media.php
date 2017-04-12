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
      $nota1 = $_GET["n1"];
      $nota2 = $_GET["n2"];
      $media = ($nota1 + $nota2)/2;
      $r = ($media >= 6.0) ? "Aprovado" : "Reprovado";
      echo "Sua média é ". number_format($media, 1 , "," , ".")." e sua situação é $r";
    ?>
</div>
</body>
</html>
