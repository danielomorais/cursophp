<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Desafio 02 - PHP</title>
</head>
<body>
	<section>
      <h1>Trabalhando com números aleatórios</h1>
		<p>Gerando um número pseudoaleatório entre 0 e 100...</p>
		<?php
			$numRandom = rand(0, 100);		
			echo "<p>O valor gerado foi $numRandom</p>";
		?>
		<button onclick="window.location.reload()"> &#x1F504; Gerar outro número</button>
		</form>
	</section>
</body>
</html>
