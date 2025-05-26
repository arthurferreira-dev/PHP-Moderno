<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final - Desafio 005</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
            # Pegando dados
            $real = $_POST["phpnum"] ?? 0;
            $int = intval($real);
            $frac = $real - $int;

            # Formatando os dados
            $realformat = number_format($real, 3, ',', '.'); // . e ,
            $intformat = number_format($int, 0, ',', '.');
            $fracformat = round($frac, 3);
            $fracformat2 = number_format($fracformat, 3, ',');

            # Mostrando os Dados em forma de Texto
            echo "<p>Analisando o número <strong>$realformat</strong> informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é <strong>$intformat</strong></li><li>A parte fracionária do número é <strong>$fracformat2</strong></li></ul>";
            echo "<p>Obrigado Curso em Vídeo!</p>"
        ?>
        <button>
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </button>
    </main>
</body>
</html>