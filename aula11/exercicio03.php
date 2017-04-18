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
      $i = $_GET['inicio'] ?? 0;
      $f = $_GET['final'] ?? 0;
      $inc = $_GET['incremento'] ?? 1;


      while ($i <= $f) {
          echo $i."<br>";
          $i += $inc;
      }

    ?>
</div>
</body>
</html>
