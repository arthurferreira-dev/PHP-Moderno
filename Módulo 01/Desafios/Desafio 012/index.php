<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 012 - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        $total = $_POST['phpsec'] ?? 0;
    ?>
    <main>
        <h1 style="text-align: center;">Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="sec">Qual é o total de segundos? </label>
            <input type="number" name="phpsec" id="sec" value="<?=$seg?>" min="0">
            <p>* Digite 2 milhões de segundos que o resultado será: </p>
            <p>3 semanas, 2 dias, 3 horas, 33 minutos e 20 segundos.</p>
            <p style="text-align: center;">Confere aí &#x1F447;!</p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?php
        $sobra = $total;

        $semana = intdiv($sobra, 604800);
        $sobra = $sobra % 604800;

        $dia = intdiv($sobra, 86400);
        $sobra = $sobra % 86400;

        $hora = intdiv($sobra, 3600);
        $sobra = $sobra % 3600;

        $minuto = intdiv($sobra, 60);
        $sobra = $sobra % 60;
        
        $seg = $sobra;
        ?>
        <p>Analisando o valor que você digitou de, <?=number_format($total, 0, ",", ".")?> segundo(s) equilavem a um total de:</p>
        <ul>
            <li> <?=$semana?> semana(s)</li>
            <li> <?=$dia?> dia(s)</li>
            <li> <?=$hora?> hora(s)</li>
            <li> <?=$minuto?> minuto(s)</li>
            <li> <?=$seg?> segundo(s)</li>
        </ul>
    </section>
</body>
</html>