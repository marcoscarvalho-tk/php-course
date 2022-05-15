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
        // este foi o metodo da correção do exercicio
        // segundo o professor é mais seguro
        // pois não passa valores via URL

        session_start();
        
        $n1 = rand(0,9);
        $n2 = rand(0,9);
        $_SESSION['verif'] = $n1 + $n2;
        ?>
    <form method="POST" action="verify.php">
        <?php echo $n1." + ".$n2." = ";?>
        <input class="inpt" type="number" name="num"/><br><br>
        <input class="bt" type="submit" value="Verificar"/>
    
    </form>
    
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>