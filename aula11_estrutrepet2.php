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
    <p><strong> Estrutura de repetição</strong></p>
        
        
    <?php
       $i = 1;
       while($i <=5 ){
           $v = "num".$i;
           $url = "v". $i;
           $$v = isset ($_GET[$url]) ? $_GET[$url] : 0;
           $i++;
       }
       //echo " $num1 $num2 $num3 $num4 $num5" ;
      $i = 1;
       while($i <=5 ){
        $v = "num".$i;
       
        
         echo"Valor $i : " . $$v . "<br/>";
         $i++;
    }
         
    ?>
        
    <p><a href="javascript:history.go(-1)"><input type="button" value="eviar"></a></p>
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>