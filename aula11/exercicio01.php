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
      $inicio = 1;
      $limite = 15;

      $c = $inicio;
      $d = $limite;
      while ($c<=$limite){
        echo "Número crescente $c, Número decrescente $d";
        if ($c==$d){
          echo ", são iguais";
        }
        echo ".<br>";
        $c++;
        $d--;
      }

    ?>
</div>
</body>
</html>
