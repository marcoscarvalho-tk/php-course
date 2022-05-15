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
    <legend><strong>ATENÇÃO!</strong></legend>
       
   
    <p><strong>ESTA É UMA PÁGINA DE TESTES</strong>
            <br/>Acesso realizado com sucesso!</p>
   
    <form method="POST">
        <input class="inpt" type="text" name="teste"><br><br>
        <input class="bt" type="submit" value="click">
    </form>  
   
    <?php
    $teste = isset($_POST['teste'])? $_POST['teste'] : '';
    if(!empty($_POST['teste'])){
        echo "<hr/>Olá, ".$teste."!<br/>Seja bem vindo!";
    }else{
        echo "<hr/>Digite seu Nome!";
    }
    
    
    ?>
    </fieldset>
    </section>
    
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>
