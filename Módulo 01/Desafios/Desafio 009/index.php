<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009 - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        # DATA PHP FORM (DPF)
        $v1 = $_POST['phpv1'] ?? '';
        $v2 = $_POST['phpv2'] ?? '';

        $p1 = $_POST['phpp1'] ?? '';
        $p2 = $_POST['phpp2'] ?? '';
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">1° Valor: </label>
            <input type="number" name="phpv1" id="v1" value="<?=$v1?>">

            <label for="p1">1° Peso: </label>
            <input type="number" name="phpp1" id="p1" value="<?=$p1?>">

            <label for="v2">2° Valor: </label>
            <input type="number" name="phpv2" id="v2" value="<?=$v2?>">

            <label for="p2">2° Peso: </label>
            <input type="number" name="phpp2" id="p2" value="<?=$p2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            # Média Aritmética Simples | DPF
            $med = ($v1 + $v2) / 2;
            $mformat = number_format($med, 2, ".", ",");

            # Média Aritmética Ponderada | DPF
            $pond = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
            $rformat = number_format($pond, 2, ".", ",");
        ?>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li>
                A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong><?=$mformat?></strong>
            </li>

            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <strong><?=$rformat?></strong>
            </li>
        </ul>
    </section>
</body>
</html>