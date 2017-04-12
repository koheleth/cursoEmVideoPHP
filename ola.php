<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Primeiro exemplo PHP</title>
    <style>

      h2{
        color : #0000ff;
        text-shadow: 1px 1px 1px #000000;
      }
    </style>
  </head>
  <body>
    <h1>Testando PHP</h1>
    <?php $teste = "Maria foi a feira"; ?>

    <?php
      echo "<h2> Olá mundo! $teste</h2>";
    ?>
  </body>
</html>
