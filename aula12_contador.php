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
        $c = 10;
        do{
            echo " $c";
            $c--;
        }while($c>=0);
         
    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>