<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 05 - PHP</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["num"] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário.</p>";

            $int = (int)$num;
            $fra = $num - $int;

            echo "<ul><li>A parte inteira do número é <strong> ".number_format($int, 0, ",", ".")." </strong></ul></li>";
            echo "<ul><li>A parte fracionária do número é <strong> ".number_format($fra, 3, ",", ".")." </strong></ul></li>";
        ?>
        <button onclick="javascript:history.go(-1)">&#8592; Voltar</button>
    </main>
</body>
</html>