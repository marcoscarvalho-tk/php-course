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
    <fieldset style="height: 500px; padding-top: 50px" >
    <legend><strong>PHP</strong></legend>
      
    <br/><p>Deletando valores repetidos</p>
   
    <form method="POST">
        <input class="inpt" type="text" name="num" multiple><br><br>
        <input class="bt" type="submit" value="Verificar">
    </form>  
    <?php
    $num = isset($_POST['num'])? $_POST['num']:'';

    //trasforma $num em uma array
    $n = explode(",",$num);
    
    $res = array();
    //print_r($n);
    if(!empty($num)){
        foreach($n as $valor){
            //esta função verifica a presença de valores repetidos
            //outra forma usa o sort() e verifica o valor anterior
            //porem o resultado será em ordem numérica
            if(!in_array($valor, $res)){

                // a cada passada pelo if é armazendado o novo $valor em $res          
                array_push($res,$valor);
            }
        }
        echo "<br/><hr/>";

        //transforma $res em uma string acrescentando vírgulas entre os valores
        echo "Resultado: ".implode(",",$res);
    }else{
        echo "<br/><hr/>";
        echo "Insira valores separados por vírgula";
    }
    ?>
   
    </fieldset>
    </section>
    
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>
