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
        <p><strong> Rotinas em PHP</strong></p>
    <?php
    //função sem retorno ou procedimento
       function soma ($a, $b){
           $s = $a + $b;
           echo  "A soma de $a + $b = $s <br/>";
       }
       soma(3,4);
       soma(8,2);
       $x = 9;
       $y = 15;
       soma($x, $y);
   
       //função com retorno
       function sum($m, $n){
            $res = $m + $n;
            return $res;
            //return $m + $n; // tem o mesmo resultado
       }
       $f = 3;
       $g = 4;
       $r = sum($f, $g);
       echo "A soma de $f + $g = $r <br/>";
       
       //função soma de multiplos parametros
       function somar(){
           $p = func_get_args();
           $tot = func_num_args();
           $z = 0;
           for($i = 0; $i < $tot; $i++){
               $z = $z + $p[$i];
           }
            return $z;
        }

       $result = somar(3,4,8,1,2);
       echo "A soma de todos os valores do vetor é $result";
    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>