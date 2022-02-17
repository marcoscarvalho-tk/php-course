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
    <p><strong> funções string pré definidas em PHP<br> strtolower,.</strong></p>
    <?php
    //a função strtolower converte o texto para letras minusculas
    //a função strtoupper faz o inverso da strtolower
    //a função ucfirst converte o apenas primeiro caracter para maiuscula mantendo os demais de acordo com a formatação.
    //a função ucwords converte o primeiro caracter de cada palavra para maiuscula mantendo os demais de acordo com a formatação.
    //a função strrev converte a string reposicionando os caracteres de forma inversa
    //a função strpos mostra a posição da string levando em consideração a formatação
    //a função stripos funciona da mesma forma da strpos porém independente da formatação
    //a função substr_conut retorna o resultado de quantas strings iguais existem no vetor
    //a função substr recebe uma string de uma determinada variavel (vetor)
    //que tem como parametro o indece de inicio e fim ou apenas inicio, ou apenas fim utilizando inclusive paramentros negativos.
    //a função str_pad acrescenta caracter predeterminado no paramentro entre aspas de acordo com a posição tambem predeterminada apos o parametro aspas
    //a função str_repeat repete o caracter entre aspas ou a string passadas como parametro junto com o nr de vezes a ser repetida
    //a função str_replace substitui a string por outra passada por parametro
    //a função str_ireplace funciona da mesma forma da str_replace porem ignorando a formatação.

    $nome = "Curso em video eh o curso";
    $name = "Gustavo Guanabara";
    $nm = "funcoes PHP";
    $php = "php";
    
    $nome2 = strtolower($name);
    echo "Seu nome é $nome2";

    echo "<br>";
    $nome3 = strtoupper($nome);
    echo "Seu nome é $nome3";

    echo "<br>";
    //uma função pode ser passada como parametro em outra como no caso abaixo.
    print("Sue nome é ".ucfirst(strtolower($nm)));

    echo "<br>";
    print("Seu nome é ".ucwords($nome));

    echo "<br>";
    print("Seu nome ao contrário é ".strrev($name));

    echo "<br>";
    print("A string 'PHP' está na posição ".strpos($nm,"PHP"));
    echo "<br>";
    print("A string 'PHP' está na posição ".stripos($nm,"php"));
    //acrecentando o i (ignore) na funçao desta forma stripos 
    //teremos uma busca mostrando o resultado independente da formatação.
    
    echo "<br>";
    //atentção a formataçao pois é CASESENSITIVE!!
    print("Quantas palavras 'curso' existem na frase $nome?  Resposta: ".substr_count($nome,"curso"));
    
    echo "<br>";
    echo "A substring predeterminada de $nm é ".substr($nm, 8, 11);
    //abaixo temos o mesmo resultado com um numero negativo ou seja ele faz a contagem de caracters de forma regressiva
    echo "<br>";
    echo "A substring predeterminada de $nm é ".substr($nm,-3);
    //ou ainda assim
    echo "<br>";
    echo "a substring predeterminada de $nm é ".substr($nm, 8);

    echo "<br>";
    $novo = str_pad($php, 10,"#", STR_PAD_BOTH);
    //outras opçoes sao LEFT e RIGHT
    print( "O porofessor $name ensina $novo");

    echo "<br>";
    echo "O texto gerado foi ".str_repeat("; ) ", 3);

    echo "<br>";
    //observação!! atenção a formatação pois é CASESENSITIVE!!
    echo " $nome, ".str_replace("curso","melhor",$nome);
    //para iginorar a formatação adcione a letra i em str_ireplace
    echo "<br>";
    echo " $nome, ".str_ireplace("curso","melhor",$nome);


    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>