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
    <section style="width:700px">
    <fieldset >
    <legend><strong>PHP</strong></legend>
    <p>Lista de sorteio</p>
    <form method="GET">
        Nomes:
        <input class="inpt" type="text" name="strg"><br/><br/>
        
        <input class="bt" type="submit" value="Sortear"><br/><br/>
    </form>   
        
    <?php
    
       $strg = isset($_GET['strg'])? $_GET['strg']:'';
       $n = explode(",",$strg);
       // var_dump($n);
       print_r($n);
       if(!empty($strg)){

           //esta funçâo comuta/troca a chave(key) de lugar com o valor(value)
           $flip = array_flip($n);
           
           //esta função ramdomiza/sorteia e exibe o valor da chave(key)
           $rand = array_rand($flip);
           echo "<hr/>";
           
           echo "<strong>O nome sorteado foi: $rand </strong>";
           var_dump($flip);
       }else{
           echo "<hr/>";
           echo "Insira nomes separados por vírgula";
       }

    ?>
    </fieldset>
    </section>
    </body>
</html>