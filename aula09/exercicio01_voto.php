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
      $a = $_GET["ano"] ?? 1980;
      $i = (date("Y")-$a);
      echo "Você nasceu em $a e tem $i anos ";
    ?>
    <?php if ($i<16): ?>
      <h2>Não vota</h2>
    <?php else: ?>
      <?php if (($i >=16 && $i < 18) || $i >= 65 ): ?>
        <h2>Voto opcional</h2>
      <?php else: ?>
          <h2>Voto obrigatório</h2>
      <?php endif; ?>
    <?php endif; ?>
    <br>
    <a href="exercicio01_voto.html">Voltar</a>
</div>
</body>
</html>
