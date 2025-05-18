<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document PHP - TDP</title>
</head>
<body>
    <h1>Teste 01 da Aula 21</h1>
    <h3>
        <?php 
            $nome = "Gustavo \u{1F596}";
            $name = 'Arthur';
            echo "Olá $nome! ";
            echo "Olá $name!";
        ?>
    </h3>
</body>
</html>