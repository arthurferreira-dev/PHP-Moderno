<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010 - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        $year = date("Y");
        $later = $year - 1;
        $nas = $_POST['phpnas'] ?? '2000';
        $ano = $_POST['phpano'] ?? $later;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="nas">Em que ano você nasceu? </label>
            <input type="number" name="phpnas" id="nas" min="0" max="<?=$later?>" value="<?=$nas?>">

            <label for="ano">
                Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$year?></strong>)
            </label>
            <input type="number" name="phpano" id="ano" min="0" value="<?=$year?>">

            <input type="submit" value="Qual será sua idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $idade = $ano - $nas;
        ?>
            <p>Quem nasceu em <?=$nas?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
</body>
</html>