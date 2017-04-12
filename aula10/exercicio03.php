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
      $estado = $_GET["estados"] ?? "PE";
      echo "Sigla $estado";
      echo "<br>";
      switch ($estado) {
        case "AL":
        case "BA":
        case "CE":
        case "MA":
        case "PB":
        case "PE":
        case "PI":
        case "RN":
        case "SE":
          echo "Região Nordeste";
        break;
        case "AC":
        case "AP":
        case "AM":
        case "PA":
        case "RO":
        case "RR":
          echo "Região Norte";
        break;
        case "DF":
        case "GO":
        case "MT":
        case "MS":
        case "TO":
          echo "Região Centro-oeste";
        break;
        case "ES":
        case "MG":
        case "RJ":
        case "SP":
          echo "Região Sudeste";
        break;
        case "PR":
        case "SC":
        case "RS":
          echo "Região Sul";
        break;
        default:
          echo "Estado inválido";
      }
    ?>
    <br>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>
