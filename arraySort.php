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
    <p>Ordendador</p>
    <form method="GET">
        Números:
        <input class="inpt" type="text" name="ord"><br/><br/>
       
        <input class="bt" type="submit" value="Ordenar"><br/><br/>
    </form>   
        
    <?php
        $ord = isset($_GET['ord'])? $_GET['ord']:'';
        $n = explode(" ",$ord);
         sort($n);
              
        if(!empty($ord)){
            echo "Números desordenados: ".$ord;
            echo "<br/>Números ordenados: ".implode(" ",$n);
            echo "<pre>";
            print_r($n);
            echo "</pre>";
            var_dump($n);
        }else{
            echo "Insira números separados por espaços";
        }
    ?>
   
    </fieldset>
    </section>
    </body>
</html>