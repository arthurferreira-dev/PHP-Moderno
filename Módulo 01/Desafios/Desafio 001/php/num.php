<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final - Desafio 001</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            $num = $_REQUEST["phpnum"] ?? -1;
            $sub = $num - 1;
            $add = $num + 1;

            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>O seu <em>antecessor</em> é <strong>$sub</strong></p>";
            echo "<p>O seu <em>sucessor</em> é <strong>$add</strong></p>";
        ?>
        <button> <!--javascript:window.location.href='index.html'-->
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </button>
    </main>
</body>
</html>