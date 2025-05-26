<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002 - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <section>
        <h1 style="text-align: center;">Trabalhando com números aleatórios</h1>
            <?php 
                $numalet = mt_rand(0, 100); // rand(); mt_rand(); random_int();
                echo "<p>Gerando um número entre 0 e 100...</p>";
                echo "<p>O valor gerado foi <strong>$numalet</strong></p>"
            ?>
            <button onclick="javascript:document.location.reload()">
                &#x1F501; Gerar Outro
            </button>
    </section>
</body>
</html>