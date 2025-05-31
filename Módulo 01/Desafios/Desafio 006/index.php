<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        $num1 = $_REQUEST['phpnum1'] ?? 0;
        $num2 = $_REQUEST['phpnum2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="n1">Dividendo: </label>
            <input type="number" name="phpnum1" min="0" id="n1" value="<?=$num1?>">

            <label for="n2">Divisor: </label>
            <input type="number" name="phpnum2" min="1" id="n2" value="<?=$num2?>">

            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            $divreal = intdiv($num1, $num2);
            $divint = $num1 % $num2;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$num1?></td>
                <td><?=$num2?></td>
            </tr>
            <tr>
                <td><?=$divint?></td>
                <td><?=$divreal?></td>
            </tr>
        </table>
    </section>
</body>
</html>