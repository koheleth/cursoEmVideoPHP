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
      $valor = $_GET["v"];
      echo "A raiz quadrada de $valor é ".(sqrt($valor));

    ?>
    <form action="01exercicio.html">
      <input type="submit" value="Voltar">
    </form>
</div>
</body>
</html>
