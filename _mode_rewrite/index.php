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
        <p><strong> URL Amigável</strong></p>
        <?php 
        print_r($_GET);
        echo "<br/>Digite algum nome na url para testar.";
        ;?>
    <p><a href="http://localhost/cursophp03/"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy; B7Web</p>
    </footer>
    
</body>
</html>