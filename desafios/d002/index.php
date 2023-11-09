<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
        $min = 0;
        $max = 1000;


        $min = 0;
        $max = 100;

        $num = mt_rand($min, $max);

        echo "<p> Gerando um número aleatório entre $min e $max... <br> O número gerado foi <strong>$num</strong></p>";

        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro nùmero.</button>
    </main>
    
</body>

</html>
<!--
// rand() = 1951 - linear Congretial Gererator - função antiga.(antiga)
        // mt_rand() = 1997 - Mersenne twister - função mais recente (moderna)
        // a partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
        // rand_int() gera números aleatórios criptograficamente seguros.-->