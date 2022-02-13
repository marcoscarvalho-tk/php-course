<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Curso PHP</h1>
</header>
    <section>
        <p><strong> Rotinas em PHP <br> Funções e procedimentos.</strong></p>
    <pre>
     <?php
    //A função var_dump mostra o array da mesmpa fomra que print_r porém acrescenta o tipo da variavel
    //a função count acrescentada ao print_r exibse o numero de valores do array.
    //a função array_push tem o mesmo efeito do colchete apos a variavel para acrescentar um novo valor no final
    //a função array_pop eliminta o valor juntamente com o indicie da ultima posição
    //a função array_unshift acrescenta valores no inicio do vetor
    //a função array_shift elimina valores do inicio do vetor
    //a função sort ordena o vetor em ordem alfabetica ou numerica mantendo a ordem do indice
    //a função rsort funciona da mesma forma da sort porém na ordem inversa
    //a função asort ordena os valores mantendo os respectivos indices associados
    //a função arsort funciona da mesma forma da asort porém na ordem inversa.
    //a função ksort ordena o vetor por indice mantendo os respectivos valores associados
    //a função krsort funciona da mesma forma da ksort porém na ordem inversa
    
    $v = array("a","C","D","B");
    $v[] = "E";
    array_push($v,"F");
    echo "Este vetor tem ".count($v)." elementos<br/>";    
    echo "O array inicial de forma desordenada é<br/>";
    print_r($v); 
    echo "O valor ".$v[5]." foi retirado<br/> E o valor de indice 0 foi substituido <br/>";
    array_pop($v);
    array_shift($v);
    array_unshift($v,"A");
    echo "O array na ordem de valores com indices <br> associados fica assim: <br/>";
    asort($v);
    print_r($v);
    echo "O array na ordem de indices com valores <br> associados fica assim: <br/>";
    ksort($v);
    print_r($v);
    sort($v);
    echo "O array na ordem inversa fica assim: <br/>";
    rsort($v);
    var_dump($v);
    
    
    ?>
    </pre>
   
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>