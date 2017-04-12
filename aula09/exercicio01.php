<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style media="screen">
    span.pode{
      color: #194be2;
    }
    span.naopode {
      color: #e92d2d;
    }
  </style>
</head>
<body>
<div>
    <?php
      $a = $_GET["ano"] ?? '1980';
      $i = (date("Y")-$a);
      echo "Você nasceu em $a e tem $i anos ";
    ?>
    <?php if ($i >= 18): ?>
      <span class="pode">
        <h2>Já pode votar</h2>
        <h2>Já pode dirigir</h2>
      </span>
    <?php else: ?>
      <span class="naopode">
        <h2>Não pode votar</h2>
        <h2>Não pode dirigir</h2>
      </span>
    <?php endif; ?>
    <br>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>
