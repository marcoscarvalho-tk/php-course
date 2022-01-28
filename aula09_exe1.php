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
        <p><strong> Estrutura Condicional</strong></p>
    <?php
        $a = isset($_GET["ano"])? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "você nasceu em $a "; 
        echo "e a sua idade é $i anos.";

        if($i >=16 && $i < 18){
            $v = "pode votar";
            $d = "mas ainda não pode dirigir";
        }elseif( $i >= 18 && $i < 60){
            $v = "deve votar";
            $d = "e pode dirigir";
        }elseif($i >  60){
            $v = "não é obrigado a votar";
            $d = "mas ainda pode dirigir";
            }else{
                $v = "não pode votar";
                $d = "e não pode dirigir";
                }

                  
        
        echo "<br> Com essa idade você $v,  $d";
    ?>
    <p><a href="aula09_estrutcond.html"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>