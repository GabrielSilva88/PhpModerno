<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu <em> antecessor é </em> <strong>$a</strong>";
                echo "<br>O seu <em> sucessor é </em><strong>$s</strong>";
                
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>

</html>
<!--
/*
    SEM VARIAVEL

	$num = 15;
	
	//$ant = $num -1;
	//$suc = $num +1;
	
	echo "O antecessor de $num é " . ($num - 1) ." \n";
	echo "O sucessor de $num é ". ($num + 1) ." \n";
    
    // opção via javascript
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
-->