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
      
    <br/>Converta cardinais em dígitos</p>
   
    <form method="POST">
        <input class="inpt" type="text" name="num" multiple><br><br>
        <input class="bt" type="submit" value="Converter">
    </form>  
   
    <?php
    $num = isset($_POST['num'])? $_POST['num'] :'';
    if(!empty($num)){
        echo "<br/><hr/>";
        print_r($num);
        echo "<br/>";
        $n = explode(",",$num);
        $res = array();
        foreach($n as $valor){
          
            switch($valor){
               
                case 'um':
                  $valor = "1";
                   break;
                case 'dois':
                  $valor = "2";
                   break;
                case 'tres':
                case 'três':
                  $valor = "3";
                   break;
                case 'quatro':
                  $valor = "4";
                   break;
                case 'cinco':
                  $valor = "5";
                   break;
                case 'seis':
                  $valor = "6";
                   break;
                case 'sete':
                  $valor = "7";
                   break;
                case 'oito':
                  $valor = "8";
                   break;
                case 'nove':
                  $valor = "9";
                   break;
                case 'zero':
                  $valor = "0";
                   break;                   
                   
            }
            //echo $valor.",";
            array_push($res,$valor);             
        }
        //print_r($res);
        echo implode(",", $res).".";
    }else{
        
       echo "<br/><hr/>Insira valores cardinais<br/>
       separados por vírgulas"; 

    }
    
       
    ?>
    </fieldset>
    </section>
    
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>