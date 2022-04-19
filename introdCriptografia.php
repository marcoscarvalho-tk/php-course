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
        <p><strong> Introdução à cripgografia</strong></p>
    <pre>
    <?php
    $nome = "Marcos";
    //tipo de criptografia irreversível
    $nome2 = md5($nome);
    //tipo de criptografia reversível
    $nome3 = base64_encode($nome);
    echo "Nome original: <br/>".$nome;
    echo"<br/>";
    echo "Nome criptografado irreversivel: <br/>".$nome2;
    echo"<br/>";
    echo "Nome criptografado refersivel: <br/>".$nome3;
    echo"<br/>";
    echo "Nome descriptografado; <br/>".base64_decode($nome3);
    ?>
   </pre>
    
   
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>