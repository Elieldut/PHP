<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../Challenge 001/style.css.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php
        $num = $_GET['n'] ?? 0;

        echo "Analisando o número ". number_format($num, 3, ",", ".")." informado pelo usuário:";

        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul><li> A parte inteira do número é <strong>".number_format($int, 0, ",", ",")."</strong>.</li>";
        
        echo "<li> A parte fracionária do número é <strong>".number_format($fra, 3, ",", ".")."</strong>.</li>";
        ?>
        <a href="../Challenge 005/index.html"><button>Voltar</button></a>
    </main>
</body>
</html>