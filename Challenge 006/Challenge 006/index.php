<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="" method="get">
        <label for="d1">Dividendo</label>
        <input type="number" name="d1" id="d1" min="0" value="<?=$dividendo?>">
        <label for="d2">Divisor</label>
        <input type="number" name="d2" id="d2" value="<?=$divisor?>">
        <input type="submit" min="1" value="Analisar">
        </form>
    </main>

    <section>
    <h2>Estrutura da Divisão</h2>
    <?php
    //Calculos
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    echo "<ul>";
    echo "<li>Dividendo: $dividendo</li>";
    echo "<li>Divisor: $divisor</li>";
    echo "<li>Quociente: $quociente</li>";
    echo "<li>Resto: $resto</li>";
    echo "</ul>";
    ?>
    </section>
</body>
</html>