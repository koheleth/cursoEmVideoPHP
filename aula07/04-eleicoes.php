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
      $ano = $_GET["an"];
      $idade = 2017 - $ano;
      echo "Quem nasceu em $ano tem idade de $idade anos<br>";
      $tipo = ($idade >= 18 && $idade < 65) ? "Obrigatório":"Não obrigatório";
      echo "E dessa forma o seu voto é $tipo";
    ?>
</div>
</body>
</html>
