<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document PHP - TDP</title>
</head>
<body>
    <h1>Teste 02 da Aula 21</h1>
    <h3>
        <?php 
            const ESTADO = "São Paulo";
            echo "Moro no Estado de " . ESTADO;
        ?>
    </h3>
    <h3>
        <?php 
            const CANAL = "Curso em Vídeo \u{1F499}";
            echo "Valeu, " . CANAL;
        ?>
    </h3>
</body>
</html>