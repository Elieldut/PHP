<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css.css">
</head>
<body>
<main>
        <h1>Resultado Final</h1>
        <?php
            $n = $_REQUEST["num"] ?? 0;
            $a = $n - 1;
            $s = $n + 1;
            echo "O número escolhido foi $n";
            echo "<br>O seu antecessor é $a";
            echo "<br>O seu sucessor é $s";
        ?>

        <a href="../Challenge/des1.html"><input type="submit" value="Voltar"></a>
    </main>
</body>
</html>