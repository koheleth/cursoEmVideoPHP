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
      $n = $_GET["numero"] ?? 1;
      echo "<h1>Tabuada de $n</h1>";
      $c = 1;
      do {
        echo "$c x $n = ".($c*$n)."<br>";
        $c++;
      } while ($c<=10);

    ?>
</div>
</body>
</html>
