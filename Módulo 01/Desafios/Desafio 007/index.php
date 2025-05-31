<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007 - Volume 01 - PHP</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        $formato = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $sal = $_REQUEST['phpsal'] ?? 1;
        $salmin = 1509;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário (R$) </label>
            <input type="number" name="phpsal" id="sal" step="0.01" value="<?=$sal?>">

            <p>Considerando o salário mínimo de <strong>R$1.509</strong> segundo a <a href="https://www.camara.leg.br/noticias/1093250-governo-preve-salario-minimo-de-2025-em-r-1-509-com-aumento-de-687-em-relacao-ao-atual#:~:text=e%20Administra%C3%A7%C3%A3o%20P%C3%BAblica-,Governo%20prev%C3%AA%20sal%C3%A1rio%20m%C3%ADnimo%20de%20R%24%201.509%20em%202025%2C%20com,87%25%20em%20rela%C3%A7%C3%A3o%20ao%20atual&text=A%20proposta%20or%C3%A7ament%C3%A1ria%20para%202025,atual%2C%20de%20R%24%201.412." target="_blank">Agência Câmara de Notícias</a>.</p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php
            $restante = intdiv($sal, $salmin); # quantos salários
            $sobra = $sal - ($salmin * $restante);  # sobra

            echo "<p>Quem recebe um salário de <strong>". numfmt_format_currency($formato, $sal, "BRL") ."</strong> ganha <strong>$restante salários mínimos + ". numfmt_format_currency($formato, $sobra, "BRL") ."</strong></p>";
        ?>
    </section>
</body>
</html>