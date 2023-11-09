<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipo primitivos</h1>
    <?php

    // 0x = hexadecimal; 0b = binário; 0= Octal;
    // $num = 0x1A;
    // echo " O valor da Variável é $num";

    // $v = 300;
    // var_dump($v);

    // potencias
    // 3e2= elevado a 2 =  3 X 10(2)
    // $num = (int) 3e2;
    // echo "O valor é $num"; var_dump(); função que pode substituir na tipologia;
    // var_dump($num);

    // Numero interiro, real 
    // $num = (int) "950";
    // var_dump($num);
    // $num = (float) "950,54";
    // var_dump($num);

    // $vet = [6, 2.5, "Maria", 3, false];
    // var_dump($vet);

    class Pessoa
    {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);

    ?>
</body>

</html>