<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php
    $txt = $_GET["t"] ?? '[Texto generico]';
    $tam = $_GET["tam"] ?? '12pt';
    $cor = $_GET["cor"] ?? '#ffffff';

  ?>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style media="screen">
    span.texto {
      font-size: <?php echo $tam; ?>;
      color : <?php echo $cor; ?>;
    }
  </style>
</head>
<body>
<div>
    <?php
      echo "<span class='texto'>$txt</span>"
    ?>
</div>
</body>
</html>
