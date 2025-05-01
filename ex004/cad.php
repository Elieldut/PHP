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
        <h1>Resultado de processamento </h1>
    </header>
    <main>
        <?php
        // var_dump($_GET); //$_GET $_POST $_COOKIES
        $n = $_GET["nome"] ?? "SEM NOME";
        $s = $_GET["sobrenome"] ?? "DESCONHECIDO";
        echo "É um prazer te conhecer <strong>$n $s</strong>, este é o meu site! ";
        $res = 50 / (2 + 3) ** 2;
        echo "$res";
        ?>
        <p><a href="../ex004/index.html"><span>COME BACK</span></a></p>
    </main>
</body>
</html>