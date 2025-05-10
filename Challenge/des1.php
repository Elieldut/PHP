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
        
            // O $n é uma variável como toda variável precisa de um valor vamos aplicar, Como? Utilizando o ($_REQUEST,_GET ou _POST...) o $_REQUEST é utilizado para atribuir um valor a variável, para isso ele utiliza o parâmetro ["num"] para pegar a chave no array, ou seja esse parâmetro vai ter quer ser o mesmo que você utiliza no seu 'name="num"' do input do fromulário. Agora para que serve essas duas interrogações? Essa duas '??' representa um operador de coalescência nula. Ele é utilizado com um 0 na frente, para que fins '??' é usado? Para indicar o valor que você colocar no ["num"], agora se esse ["num"] não estiver sendo usado no meu formulário o valor vai ser sempre 0 independente do valor que você colocar no formulário, no entanto esse mesmo ["num"] tem que está no 'name="num"' do formulário.
            $n = $_GET ["num"] ?? 0; 
            

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