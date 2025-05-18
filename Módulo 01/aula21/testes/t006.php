<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document PHP - TDP</title>
</head>
<body>
    <h1>Teste 06 da Aula 21</h1>
    <h2>Nowdoc</h2>
    <h3>
        <?php //Nowdoc
            $curso = "PHP \u{1F418}";
            $year = date('Y');
            echo <<< 'TEST'
                Estou estudando
                        $curso em $year
            TEST;
        ?>
    </h3>
</body>
</html>