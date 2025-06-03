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
        <h1 class="Res">Conversor de Moedas</h1>
        <?php
        // Contação vinda da API do Banco Central do Brasil para conversão de Reais para Dólares.
         $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
    
        var_dump($dados);

        $cotacao = $dados['value'][0]['cotacaoCompra'];
        
        $real = $_GET["din"] ?? 0;
        
        $dolar = $real / $cotação;
        
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "<br>";
        ?>
    </main>
</body>
</html>
