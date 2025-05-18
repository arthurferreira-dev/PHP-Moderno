<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document PHP - TDP</title>
</head>
<body>
    <h1>Teste 04 da Aula 21</h1>
    <h3>
        <?php 
            $nom = "Rodrigo";
            $snom = "Nogueira";
            $apelido = "Minotauro";

            echo "$nom <br> \"$apelido\" <br> $snom";

            #\n = quebra de linha
            #\t = Tabulação horizontal
            #\\ = Barra invertida
            #\$ = Sinal de cifrão
            #\u{} = Codepoint Unicode
        ?>
    </h3>
</body>
</html>