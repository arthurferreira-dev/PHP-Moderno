<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008 - Volume 001 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        $num = $_REQUEST['phpnum'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número: </label>
            <input type="number" name="phpnum" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            # Fazendo as Raízes 
            $quadrada = sqrt($num);
            $cubica = $num ** (1/3);

            # Formatando as Raízes
            $qformat = number_format($quadrada, 3, ",", ".");
            $cformat = number_format($cubica, 3, ",", ".");

            echo "<p>Analisando o <strong>número $num</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>$qformat</strong></li> <li>A sua raiz cúbica é <strong>$cformat</strong></li></ul>"
        ?>
    </section>
</body>
</html>