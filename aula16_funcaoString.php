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
        <p><strong> funções string pré definidas em PHP <br> printf, print_r, wordwrap<br>strlen, trim, ltrim,
        rtrim, str_word_count, explode, implode, str_split, chr, ord. </strong></p>
    <?php
    $p = "leite";
    $pr = 4.5;
    echo " O $p custa R$ " .number_format($pr,2);
    //substituido o echo por printf.
    //a função printf neste caso funciona de forma semelhante ao da linguagem C.
    printf("<br>O %s custa R$ %.2f", $p,$pr );

    $v[0] = "curso";
    $v[1] = "em";
    $v[2] = "video";
    echo "<br/>";
    //a função print_r mostra na tela o indice do vetor com o seu respectivo valor atribuido na variavel.
    // print_r pode ser substituido por funçoes var_dump($x) ou var_export($x)  
    print_r($v);
    $v2 = array(1,2,3,4,5);
    echo "<br/>";
    print_r($v2);
 
    $t = "Aqui temos um texto gigante criado pelo PHP";
    //no parametro temos a variavel $t o nr 20 na quantidade de caracteres para uso datag <br> no HTML e \n no código fonte.
    $r = wordwrap($t, 25, "<br/>\n");
    echo "<br>$r";
    
    $x = "   curso em video   ";
    //strlen retorna o nr de caracteres incluido espaços
    //a função trim retorna o nr de caracteres despresando espaços iniciais e finais preservando os de separação
    //a função ltrim retorna o nr de caracteres despresando apenas espaços os iniciais.
    //a função rtrim retorna o nr de caracteres despresando apenas espaços os finais.
    //a função str_word_count($frase, 0) retorna o numero de palavras em uma vairavel cada palavra em um indice.
    //a função explode funciona de forma similar ao str_word_conut seria uma versão atual desta.
    //a função str_split funciona de forma similar a explode porem armazenando cada letra em um indicie do vetor.
    //a funçao implode ou join funciona de forma similar ao explode porem substituindo o espaço pelo caracter entre aspas.
    //a função chr retorna o caracter referente ao código do parametro presente na variavel.
    //a função ord funciona de forma similar a chr porém de forma inversa retornando o codiogo refernte ao caracter.

    $tam = strlen($x);
    echo "<br> O nr de caracteres de $x é $tam";
    $trim = trim($x);
    echo "<br> O nr de caracteres sem espaços iniciais e finais é".(strlen($trim));
    $ltrim = ltrim($x);
    echo "<br> O nr de caracteres sem espaço iniciais é".(strlen($ltrim));
    // 0 passado como parametro retorna o nr de palavras
    // 1 passado como parametro  retorna o nr de palavras associadas uma para cada indece do vetor
    // 2 passado como parametro retorna o nr de letras de cada palavra associada na ordem sequencial de um vetor.
    $swc = str_word_count($x,0);
    $swc1 = str_word_count($x,1);
    $swc2 = str_word_count($x,2);
    echo "<br> O nr de palavras de 'curso em video' é $swc";
    
    echo "<br>\n";
    print_r ( $swc1);
    
    echo "<br>\n";
    print_r ( $swc2);
    
    echo "<br>\n";
    $explode = explode(' ',$x);
    print_r($explode);
   
    echo "<br>\n";
    $strsplit = str_split($x);
    print_r($strsplit);
    
    echo "<br>\n";
    $implode = implode("#",$v);
    print_r($implode);
   
    echo "<br>\n";
    $chr = chr(67);
    echo "A letra de código 67 é $chr";
    
    echo "<br>\n";
    $ord = ord(C);
    echo "O código referente a letra C é $ord \n";
   
    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>