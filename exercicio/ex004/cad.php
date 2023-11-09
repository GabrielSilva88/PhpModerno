<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
         
        $n = $_GET["nome"] ?? "Sem Nome";
        
         $s = $_GET["sobrenome"] ?? "Desconhecido";

         echo "<p> É um prazer te conhecer,<strong>$n $s</strong>! Este é meu site !"
         
        ?>

            <p>
                <a href="javascript:history.go(-1)">VOLTAR</a>
            </p>
    </main>
</body>
</html>