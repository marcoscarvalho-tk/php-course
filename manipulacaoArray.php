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
    <pre>
    <?php
    $array = array(
        "Marcos",
        "Lucas",
        "Joao",
        "Matheus"
    );
    $array1 = array(
        "nome" => "Marcos",
        "idade" => 40,
        "cidade" => "Brasilia",
        "pais" => "Brasil"
     );
     //mostra o total de valores
     print_r (count($array));
     //mostra os valores de um array
     $array2 = array_values($array1);
     //mostra as chaves ou indices de um array
     $array3 = array_keys($array1);
     print_r ($array2);
     print_r ($array3);
     //ordena em ordem alfabetica dos valores
     //arsort ordena de forma inversa
     asort($array);
     print_r($array);
     //deleta o ultimo valor junto com a chave 
     array_pop($array1);
     //deleta o primeiro valor junto com a chave
     array_shift($array1);
     print_r($array1);
     //função utilizada para localizar um valor em um array
     if(in_array("Marcos", $array)){
         echo "Este nome consta na lista!";
     }
     
     
    ?>
   </pre>
    
   
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>