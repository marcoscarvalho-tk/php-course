
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
    <p><strong>Calculadora Básica</strong></p>
    <?php
    $n2 = isset($_GET['n2'])? floatval($_GET['n2']) : '0';
    $n1 = isset($_GET['n1'])? floatval($_GET['n1']) : '0';
    $op = isset($_GET['op'])? floatval($_GET['op']) : '0';
    
    
    if(!empty($n1) && !empty($n2)){
        
            switch($op){
                case 0:
                echo "$n1 + $n2 = ".($n1 + $n2);
                break;
                
                case 1:
                echo "$n1 - $n2 = ".($n1 - $n2);
                break;

                case 2:
                echo "$n1 x $n2 = ".($n1 * $n2);
                break;

                case 3:
                echo "$n1 / $n2 = ".($n1 / $n2);
                break;
            
            }
        } else{
            echo "Por favor! <br/> Insira um valor.";

    
    }
    

    ?>

<p><a href="http://localhost/cursophp02/_calculadora/_index.php"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>