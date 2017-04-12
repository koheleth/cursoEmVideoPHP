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
      $a = 3;
      $b = "3";

      $r = ($a == $b) ? "sim" : "não";
      echo "O valor das variaveis são iguais? ". $r;

      $r = ($a === $b) ? "sim" : "não";
      echo "<br/>O valor das variaveis são identicos? ". $r;


    ?>
</div>
</body>
</html>
