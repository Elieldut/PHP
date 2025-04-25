<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de php</h1>

    <?php
    // use a tag date_default_timezone_set para colocar a hora em fuso horario
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date ("d/m/Y");
    echo "E a hora autal " . date("G:i:s");
    ?>
    <p></p>
    <?php
    $nome = "Eliel";
    $sobrenome = "Alves";
    $curso = "TI";
    const PAÍS = "Brasil";
    echo "Prazer meu nome é $nome $sobrenome! Moro no " . PAÍS;
    ?>
    <?php 
    echo "e estou cursando $curso";
    ?>
    <p></p>
    <?php
    const _Q = "100";
    echo "Me retorne esse número " . _Q;
    ?>

</body>
</html>