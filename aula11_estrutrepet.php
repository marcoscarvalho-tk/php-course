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
        <form method="get" action="aula11_estrutrepet2.php">
        
    <?php
       $n = 1;
       while($n <=5 ){
            echo"Valor $n: <input type='number' name='v$n' max='100' min='0'value='0'/><br/>";
            $n++;
       }
         
    ?>
    <p><input type="submit" value="eviar"></p>
        </form>
    
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>