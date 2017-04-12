<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Funções aritméticasm</title>
  <style media="screen">
    h2 {
      font: 15pt Arial;
      color: #171559;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];

    ?>
    <h2><?php echo "Valores recebidos $v1 e $v2."; ?></h2>
    <h2><?php echo "Valores absoluto $v2 é ".abs($v2) ?></h2>
    <h2><?php echo "Valores de $v1 <sup>$v2</sup> é  ".pow($v1,abs($v2)); ?></h2>
    <h2><?php echo "A raiz quadrada de $v1 é  ".sqrt($v1); ?></h2>
    <h2><?php echo "O valor de $v2 arrendodado é  ".round($v2) ?></h2>
    <h2><?php echo "A parte inteira de $v2 é ".intval($v2) ?></h2>
    <h2><?php echo "O valor de $v1 arrendodado é  R$ ".number_format($v1, 2, ",", ".") ?></h2>

</div>
</body>
</html>
