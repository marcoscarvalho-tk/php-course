<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Curso PHP intermediário</h1>
</header>
    <section>
        <p><strong> Manipulação de textos</strong></p>
    
    <?php
    //!!FONTE: php.net/manual/pt_BR/function.php
    //divide a STRING em um determinado valor passado no parametro
    //o valor expecificado entre aspas nao será contado ou mostrado
    $x = "Marcos Domingos Carvalho";
    print_r (explode(" ",$x));
    echo"<br/>";
    //divide o ARRAY em um determinado valor passado no paramtro
    //o valor especificado entre aspas será contado e mostrado
    $y = array("Marcos","Domingos","Carvalho");
    echo implode("@",$y);
    echo"<br/>";
    //formata o valor do parametro com o nr de decimais e pontos e virgulas
    //o primeiro parametro é o nr de decimais o seg especifica a virgula e o ter o ponto
    echo number_format(82658.728578, 2,",",".");
    echo"<br/>";
    //substitui uma string por outra no parametro
    $chg = "PHP he muito bom";
    echo str_replace("bom","otimo",$chg);
    echo"<br/>";
    //substitui o primeiro caracter para caixa alta
    echo ucfirst("marcos");
    echo"<br/>";
    //substitui o primeiro caracter de cada palavra de uma string para caixa alta
    echo ucwords("marcos carvalho");
    echo"<br/>";
    //substitui os caracteres em caixa baixa para caixa alta
    //o inverso pode ser feito usando strtolower
    echo  strtoupper("marcos");
    echo"<br/>";
    //seleciona um nr de caracteres especificando o inicio e o final no parametro
    echo substr("marcos",1 ,3);
   ?>
    
   
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>