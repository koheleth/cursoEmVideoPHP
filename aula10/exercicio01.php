<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style media="screen">
    h1 {
      font-size: 18pt;
      color: #ff0000;
    }
  </style>
</head>
<body>
<div>
    <?php
      $op = $_GET["oper"] ?? "dobro";
      $n1 = $_GET["num"] ?? 0;
      echo "<h1>O número é $n1 e a operação é $op</h1>";

      switch ($op) {
        case "1" :
          $n1 = 2*$n1;
        break;
        case "2" :
          $n1 = pow($n1,3);
        break;
        case "3" :
          $n1 = sqrt($n1);
        break;
      }
    ?>
    <h1><?php echo "O resultado da operação $op é $n1" ?></h1>
</div>
</body>
</html>
