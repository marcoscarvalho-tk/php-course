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
        
        $n1 = rand(0,9);
        $n2 = rand(0,9);
        // A passagem das variaveis de rand() são passadas pelo method GET no action
        // e a passagem do valor do input no form pelo method POST
        
        ?>
    <form method="POST" action="_bverify.php?n1=<?php echo $n1."&n2=".$n2;?>">
        <span><?php echo $n1."</span>+<span>".$n2; ?> = </span>&ensp;
        <input class="inpt" type="number" name="num" placeholder="Resposta"/><br/><br/>
        <input class="bt" type="submit" value="Verificar">
        </form>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>