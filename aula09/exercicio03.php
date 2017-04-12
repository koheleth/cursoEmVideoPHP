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
    $n1 = $_GET["n1"] ?? '0';
    $n2 = $_GET["n2"] ?? '0';
    $m = ($n1 + $n2)/2;
    echo "Primeira nota $n1, a segunda nota $n2 e a média $m";
    ?>
    <?php if ($m<5): ?>
      <h1>Reprovado</h1>
    <?php elseif ($m>=7): ?>
      <h1>Aprovado</h1>
    <?php else: ?>
      <h2>Recuperação</h2>
    <?php endif; ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
  </div>
</body>
</html>
