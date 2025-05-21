<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário com PHP</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
            $name = $_REQUEST["phpname"] ?? "Caro";
            $sbname = $_REQUEST["phpsbname"] ?? "Convidado";

            echo "<p>É um prazer em te conhecer <strong>$name $sbname</strong>. Este é meu site!</p>";
            
                //var_dump($_REQUEST); $_REQUEST = $_COOKIES + $_GET + $_POST
        ?>
        <p style="text-align: center;">
            <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
        </p>
    </main>
</body>
</html>
