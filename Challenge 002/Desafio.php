<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 2</title>
    <link rel="stylesheet" href="../Challenge 001/style.css.css">
</head>
<body>
    <main>
        <h1>Números Aleatórios</h1>
        <?php
        $min = 0;
        $max = 1000;
        $num = mt_rand($min, $max);
        echo "Gerando um Número Aleatório entre $min e $max... <br>O valor gerado foi <strong>$num</strong>";

        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; AGAIN</button>
    </main>
</body>
</html>