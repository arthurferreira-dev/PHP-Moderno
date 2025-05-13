<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    /*
        // 0x = hexadecimal | 0b = binário | 0 = octal
        $num = 0x1A; // 0b1010 ,010
        echo "O valor da variável num é $num";

        $val = 0x1A;
        var_dump($val);

        $num = (integer) 3e2; // 3 x 10² /|\ Coerção
        echo "O valor é $num";
        var_dump($num);

        $num = (float) "950"; //string to float or double
        var_dump($num);

        $casado = false; //com echo print o true = 1 e o false = 0
        //var_dump($casado);
        echo "O valor para casado é $casado";

        $vetor = [6, 4.5, "Maria", false, -10];
        var_dump($vetor);
    */

        class Pessoa { //Object
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>
</body>
</html>