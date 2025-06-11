<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Desafio 01 - PHP</title>
</head>
<body>
	<section>
      <h1>Resiltado Final</h1>
      <?php 
         $numero = $_GET["numero"];
         $sucessor = $_GET["numero"] + 1;
         $antecessor = $_GET["numero"] - 1;

         echo "<p>O seu <i>antecessor</i> é: {$antecessor}</p>";
         echo "<p><strong>O número escohlido foi {$numero}</strong></p>";
         echo "<p>O seu <i>sucessor</i> é:  {$sucessor}</p>";
      ?>
      <a href="./index.html"><button type="button">&#8592; Voltar</button></a>
	</section>
</body>
</html>
