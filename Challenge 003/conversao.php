<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <main>
        <h1 class="Res">Resultado</h1>
        <?php
        $cotação = 5.66;
        
        $real = $_GET["din"] ?? 0;
        
        $dolar = $real / $cotação;
        
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "<br>";
        ?>
    </main>
</body>
</html>
