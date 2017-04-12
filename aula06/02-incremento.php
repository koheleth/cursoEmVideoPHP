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
    /*
    Esse exercicio vai mostrar o incremento e decremento
    
    */
      $atual = $_GET["aa"]; // essa linha vai pegar o ano da url
      echo "O ano atual é $atual e o ano anterior é ". --$atual;

    ?>
</div>
</body>
</html>
