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
        <p><strong> Redimensinandor de Imagens JPG</strong></p>
        <form method="POST" enctype="multipart/form-data" action="redimg.php">
            <input type="file" name="arquivo"/><br/><br/>
            <input type="submit" value="Enviar"/>
            <a href="http://localhost/cursophp03/_php_gd/"><input type="button" value="voltar"></a>
        </form>  
        <p><font color="red" size="50"><strong>Atenção!</strong></font></p>  
        <p>As imagens a serem redimensionadas deverão estar no formato JPEG,
        caso contrário não será feito o redimensionamento. Se necessário, faça a 
        alteração manualmente no código para modificar o formato. Atualizações
        futuras trarão esta opção para ser feita via radio ou select. </p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>