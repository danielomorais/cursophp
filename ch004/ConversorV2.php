<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Desafio 04 - PHP</title>
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
             $real = $_GET["dinheiro"];
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            // var_dump($dados);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <p>*Cotação obtida diretamente do site do site do <a href="https://dadosabertos.bcb.gov.br/" target="_blank">Banco Central do Brasil</a></p>
        <button onclick="javascript:history.go(-1)">&#8592; Voltar</button>
	</section>
</body>
</html>
