<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final - Desafio 004</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1 style="text-align: center; font-size: 1.82em;">Conversão Avançada em Dolár Americano</h1>
    </header>
    <main>
        <?php
            $ini = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $ini .'%27&@dataFinalCotacao=%27'. $fim .'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $data = json_decode(file_get_contents($url), true);
            $cot = $data["value"][0]["cotacaoCompra"];

            $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $real = $_REQUEST["phpmoeda"] ?? 0;
            $dol = $real / $cot; 
            $bank = 'Banco Central do Brasil';
            echo "<p>Seus " . numfmt_format_currency($default, $real, "BRL") . " equivalem à <strong>". numfmt_format_currency($default, $dol, "USD") ."</strong></p>";
            echo "<p>Cotação obtida diretamente do <strong><a>$bank</a></strong></p>";
            echo "<p>Cotação fixa em <strong>" . numfmt_format_currency($default, $cot, "BRL") ."</strong></p>"
        ?>
        <button>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </button>
    </main>
</body>
</html>