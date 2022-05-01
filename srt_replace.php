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
    <p>Substituidor</p>
    <form method="GET">
        Frase:
        <input class="inpt" type="text" name="strg"><br/><br/>
        Procurar por:
        <input class="inpt" type="text" name="srch"><br/><br/>
        Trocar por:
        <input class="inpt" type="text" name="rpl"><br/><br/>
        <input class="bt" type="submit" value="Substituir"><br/><br/>
    </form>   
        
    <?php
    
       $strg = isset($_GET['strg'])? $_GET['strg']:'';
       $srch = isset($_GET['srch'])? $_GET['srch']:'';
       $rpl = isset($_GET['rpl'])? $_GET['rpl']:'';

       if(!empty($strg) && !empty($srch) && !empty($rpl)){
           
           echo "<hr/>";
           echo "Frase digitada: ".$strg;
           echo "<br/>Nova frase: ".str_replace($srch, $rpl, $strg);
       }else{
           echo "<hr/>";
           echo "Insira a frase e as palavras a serem substituidas";
       }

    ?>
   
    </fieldset>
    </section>
    </body>
</html>