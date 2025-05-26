<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final - Desafio 003</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Conversão em Dolár Americano</h1>
    </header>
    <main>
        <?php
        // Configuração da moeda para o Brasil e nos EUA seria ($real, 2, ".", ",")
            $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $real = $_REQUEST["phpmoeda"] ?? 0;
            //$realformat = number_format($real, 2, ",", ".");
            $cot = 5.67;
            $dol = $real / $cot;
            //$dolformat = number_format($dol, 2 , ",", ".");

            echo "<p>Seus " . numfmt_format_currency($default, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($default, $dol, "USD") . "</strong></p>";
            echo "<p><strong>Cotação fixa de " . numfmt_format_currency($default, $cot, "BRL") . " informada diretamente no código</strong>.</p>"
        ?>
        <button>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </button>
    </main>
</body>
</html>