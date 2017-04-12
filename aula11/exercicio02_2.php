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
      $t = $_GET["total"] ?? 1;
      $i = 1;
      while ($i <= $t) {
        $v = "num".$i;
        $url = "v".$i;
        $$v = $_GET["$url"] ?? 0;
        $i++;
      }
      $i = 1;
      while ($i<=$t) {
        $v = "num".$i;
        echo "Valor $i = ".$$v."<br>";
        $i++;
      }

    ?>
</div>
</body>
</html>
