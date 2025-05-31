<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013 - Último Desafio - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        $saque = $_POST['phpcaixa'] ?? 0;
        $money = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1 style="text-align: center;">Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="caixa">Qual valor deseja sacar? (R$) </label>
            <input type="number" name="phpcaixa" id="caixa" step="1" value="<?=$saque?>">
            <p>Notas disponíveis: R$100, R$50, R$20, R$10, R$5 e R$1</p>
            <p>Notas indisponíveis: R$200 e R$2</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <?php 
            echo "<h2>Saque de ". numfmt_format_currency($money, $saque, "BRL") ." realizado</h2>";
            echo "<p>O caixa eletrônico vai te entregar as seguintes notas: </p>";

            $sb = $saque;

            # Nota de R$100
            $cem = intdiv($sb, 100);
            $sb %= 100;

            # Nota de R$50
            $ciq = intdiv($sb, 50);
            $sb %= 50;

            # Nota de R$20
            $vinte = intdiv($sb, 20);
            $sb %= 20;

            # Nota de R$10
            $dez = intdiv($sb, 10);
            $sb %= 10;

            # Nota de R$5
            $cinco = intdiv($sb, 5);
            $sb %= 5;

            # Moeda de 1 Real
            $um = intdiv($sb, 1);
            $sb %= 1;
        ?>
        <ul>
            <li>
                <img src="notas-reais/100-reais.jpg" alt="Nota de 100 Reais" style="width: 170px;"> 
                <?php
                echo "x $cem"; 
                ?>
                <br>
            </li>
            <li>
                <img src="notas-reais/50-reais.jpg" alt="Nota de 50 Reais" style="width: 170px; margin-top: 30px">
                <?php 
                    echo "x $ciq";
                ?>
                <br>
            </li>
            <li>
                <img src="notas-reais/20-reais.jpg" alt="Nota de 20 Reais" style="width: 170px; margin-top: 30px">
                <?php 
                    echo "x $vinte";
                ?>
                <br>
            </li>
            <li>
                <img src="notas-reais/10-reais.jpg" alt="Nota de 10 Reais" style="width: 170px; margin-top: 30px">
                <?php 
                    echo "x $dez";
                ?>
                <br>
            </li>
            <li>
                <img src="notas-reais/5-reais.jpg" alt="Nota de 5 Reais" style="width: 170px; margin-top: 30px">
                <?php 
                    echo "x $cinco";
                ?>
                <br>
            </li>
            <li>
                <img src="notas-reais/1-real.jpg" alt="Moeda de 1 Real" style="width: 105px; margin-top: 30px">
                <?php 
                    echo "x $um";
                ?>
            </li>
        </ul>
    </section>
        <p style="text-align: center; background-color: #291f6c; padding: 10px; border-radius: 5.6px; margin: auto; color: #f5f5f5;">
            Módulo de PHP &#x1F418; (Volume 1), feito com muito carinho &#x1F499;!
        </p>
</body>
</html>