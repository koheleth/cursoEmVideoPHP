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
      $d = $_GET["ds"] ?? 0;
      //$d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
      switch ($d) {
        case 0:
        case 1:
          echo "Final de semana $d";
        break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
          echo "Dia de estudos $d";
        break;
        default:
          echo "dia invalido";
      }

    ?>
    <br><a href="javascript:history.go(-1)" >Voltar</a>
</div>
</body>
</html>
