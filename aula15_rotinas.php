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
        <p><strong> Rotinas em PHP <br> Funções e procedimentos.</strong></p>
    <?php
    // este seria um tipo de procedimento, porém o PHP trata como função. 
    // passagem de parametro por VALOR.
    // passa apenas o valor da variavel matendo o seu valor
    function test($x){
        $x += 2;
        echo " echo dentro da função valor $x <br/>";
    }
    $a = 3;
    test($a);
    echo " echo fora da função valor $a <br/>";
    
    //passagem de parametro por REFERÊNCIA
    //passa o endereço da variavel alterando juntamente o seu valor
    //basta adcionar o & antes da variavel
    function teste(&$y){
        $y += 2;
        echo " echo dentro da função valor $y <br/>";
    }
    $b = 3;
    teste($b);
    echo " echo fora da função valor $b <br/>";
    
    //o include consiste em incluir uma função de um aquivo externo.
    //além do include exite o include_once, require e require_once.
    //o require requer a função para continuar
    //o include dá cuntiduidade permite a continuidade das outras funções.
    
    include "funcoes.php";
    
    ola();
    
    $v = 10;
    mostraValor($v);
    echo " o valor recebido + 10 é $v";
    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>