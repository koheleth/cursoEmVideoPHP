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
      $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
      $ano = isset($_GET["ano"])?$_GET["ano"]:0;
      $idade = date("Y") - $ano;
      $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";

      echo "$nome é $sexo e tem  $idade anos";

    ?>
    <br>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
