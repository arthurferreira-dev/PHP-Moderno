<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011 - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        $prec = $_POST['phpprec'] ?? '0';
        $rea = $_POST['phprea'] ?? '0';
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="prec">Preço do Produto (R$) </label>
            <input type="number" name="phpprec" id="prec" value="<?=$prec?>" min="0" step="0.01">

            <label for="rea">Qual será o percentual do reajuste? <strong>(<span id="porcem">?</span>%)</strong> </label>
            <input type="range" name="phprea" id="rea" value="<?=$rea?>" step="1" oninput="mudaVal()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $porcen = $rea / 100;
            $prerea = $prec * $porcen + $prec;
            $money = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>
        <p>
            O produto que custava <?=numfmt_format_currency($money, $prec, "BRL")?>, com <strong><?=$rea?>% de aumento</strong> vai passar custar <strong><?=numfmt_format_currency($money, $prerea, "BRL")?></strong> a partir de agora.
        </p>
    </section>
</body>
<script src="js/porcentagem.js"></script>
</html>