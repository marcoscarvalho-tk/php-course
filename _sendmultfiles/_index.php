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
   
        <p><strong>Envio de arquivos multiplos</strong></p>
        <form method="POST" enctype="multipart/form-data" action="reciever.php">
            Arquivo:<br/><br/>
            <input type="file" name="arquivo[]" multiple/><br/><br/>

            <input type="submit" value="Enviar arquivos"/>

        </form>
   
    <p></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>