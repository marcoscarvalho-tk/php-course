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
      
    <br/><p>Encontre o maior e menor valor</p>
   
    <form method="POST">
        <input class="inpt" type="text" name="num" multiple><br><br>
        <input class="bt" type="submit" value="Verificar">
    </form>  
    <?php
     //existe a função max() que faz o mesmo trabalho.

     $num = isset($_POST['num'])? $_POST['num']:'';
     $n = explode(",",$num);
     $max = 0;
     //print_r($n);
     if(!empty($num)){
        foreach($n as $valor){
            if($valor > $max){
                $max = $valor;
            }
        }
        echo "<br/><hr/>";
        echo "O menor número é: ".min($n);
        echo "<br/>O maior número é: ".$valor;
     }else{
        echo "<br/><hr/>";
        echo "Insira valores separados por vírgulas.";
     }
    
    ?>
   
    </fieldset>
    </section>
    
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>
