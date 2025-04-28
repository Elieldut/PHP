<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binário 0 = Octal
    // $num = 0x1A;
    // echo "O valor da variável é $num";

    // $v = "Gustavo";
    // var_dump($v);

    // $num = (integer) 3e2;// 3 x 10(2) coerção
    // // echo "O valor é $num";
    // var_dump($num);

    // $num = (float) "950";
    // var_dump($num);

    // $casado = true;
    // //var_dump($casado);
    // print "O valor para casado $casado";

    // $vet = [6, 2.9, "Maria", 3, false];
    // var_dump($vet);

    class Pessoa{
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);   
    const Estado = "MG";
    $nome = "Eliel";
    $sobrenome = "Alves \u{1F596}";
    echo "$nome \"Eliu\"  $sobrenome!  Sou de " . Estado;
    echo " Estamos no " .date('Y');
    ?>
</body>
</html>