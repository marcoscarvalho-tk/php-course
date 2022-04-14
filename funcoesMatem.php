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
        <p><strong> Funções Matemáticas <br> Funções e procedimentos.</strong></p>
    <pre>
    <?php
    // !!FONTE: php.net/manual/pt_BR/function.abs.php
    // retorna o valor absoluto de um parametro
    echo "<br/>";
    echo abs(-10);
    echo "<br/>";    
    // arredonda o valor por aproximação 
    echo round(2.8);
    echo "<br/>";
    // arredonda o valor sempre para cima
    echo ceil(2.1);
    echo"<br/>";
    // arredonda o valor sempre para baixo
    echo floor(2.9);
    echo"<br/>";
    // retorna um nr aleatorio entre valores no parametro
    $lista = array("Marcos", "Lucas","Matheus","João");
    $sort = rand(0, 3);
    echo "O sorteado é: <br/>".$lista[$sort];
    echo"<br/>";
    ?>
    </pre>
   
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>