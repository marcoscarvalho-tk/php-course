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
    <p>TESTE</p>
   
    <?php
    //esta função permite ler o conteúdo de um arquivo externo
    //armazena o conteúdo em uma variável como string
      $strg = file_get_contents("teste.txt");
      $n = explode("\n",$strg);
      $flip = array_flip($n);
      //vide arrayRand.php
      $rand = array_rand($flip);
      echo $rand;
      var_dump($n);
    ?>
    </fieldset>
    </section>
    </body>
</html>