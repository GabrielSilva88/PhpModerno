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
        <h1>Conversor de Moedas</h1>
        <?php
        //Cotação copiada do Google
        $cotacao = 5.17;

        // Quanto $$ você tem ?
        $real = 1000;

        //Equivalência em dólar
        $dolar = $real / $cotacao;

        //Mostrar o resultado SEM ELEGANCIA
        //	echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivale a US\$" . number_format($dolar, 2, ",", ".");

        //Original 	echo "Seus R\$" . $real . " equivale a US\$ . $dolar;

        // Formatação de moedas com internacionalização!

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivale a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>