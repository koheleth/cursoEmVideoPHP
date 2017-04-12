<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="exercicio02_2.php" method="get">
      <?php

      $t = $_GET["v1"] ?? 1;
      $c = 1;

      while ($c<=$t) {
        echo "Valor $c: <input type='number' name='v$c' placeholder='digite o valor $c' min='1' max='100'><br>";
        $c++;
      }
      echo "<br><input type='hidden' name='total' value='$t'>";
      ?>
      <input type="submit" value="Executar">
    </form>
</div>
</body>
</html>
