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
        <p><strong> Rotinas em PHP <br>Array.</strong></p>
    <pre>
  
    <?php
    //tag <pre> organiza o vetor na tela de forma sequencial
    $n = array(3,5,8,2);
    $n[] = 7;
    print_r($n);

    $c = range(5,20,2);
    print_r($c);
    //função foreach mostra os valores dos indices de forma dinamica
    foreach($c as $valor){
        echo "$valor ";
    }
    //o nr do indice receberá o seu valor associado de acordo com o seu numero
    //não sendo necessario para isso seguir obrigatoriamente uma ordem.
    $v = array(3=>5,
               1=>9,
               0=>8,
               7=>7);
    //um novo indice juntamente como um valor adcionado sera alocado apos o ultimo indice e com valor subsequente.
    //a função unset eliminia um indice juntamente com seu valor associado
    $v[] = "E";           
    unset($v[0]);
    print_r($v);
    
    //em um array PHP um indice nao precisa ser necessariamente um numero ele pode ser uma string
    //bem como o valor tambem pode ser uma string.
    $cad = array("nome"=>"Ana",
                 "idade"=>23,
                 "peso"=>78.5);
    print_r($cad);
    //usando a função foreach fica da seguinte forma:
    foreach($cad as $campo=> $val){
        echo "O campo $campo possui o conteudo $val <br/>";
    }

    //em PHP nao existe tecnicamente uma matriz o que existe sao arrays dentro de arrays
    $m = array(array(6,4),
               array(8,9),
               array(3,2));
    //$m [0][1] = $m[2][0];
    //print_r($m); 
    foreach($m as $index1=> $vetor){
        foreach($vetor as $index2=> $value){
            echo "O incice $index1,$index2 recebe o valor $value <br/>";
        
        }
    }
    
    ?>
    
    </pre>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>