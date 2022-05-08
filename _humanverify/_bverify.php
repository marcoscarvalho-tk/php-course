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
    <p><strong>Verificador de Humanos</strong></p>
    
        <?php
        //este foi o metodo que encontrei para resolver o exercício

        // atençao na segunda condição do ternario!
        // caso a URL seja aberta diretamente nesta PG os
        // valores iguais permite acesso na condição do if
        
        // o method POST passa o valor do <input> no <form>
        // o method GET  pega o valor das variaveis no action
        $n1 = isset($_GET['n1'])? $_GET['n1'] : '1';
        $n2 = isset($_GET['n2'])? $_GET['n2'] : '0';
        $num = isset($_POST['num'])? $_POST['num'] : '0';

        echo $n1."+".$n2." = ".$num."<br/>";
        if(($n1 + $n2) == $num){
            echo "Seja Bem Vindo!";
        }else{
           // echo "ERRO!<br/>Refaça a operação";
           header("Location:_bindex.php");
        }

        ?>
     <a href="_bindex.php"><input type="button" class="bt" value="voltar"></a>     
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>