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
    <p><strong>Calculadora Básica</strong></p>
    <form method="GET" action="calc.php">
        <input type="number" name="n1" step="0.01" placeholder="Insira aqui">
        <select name="op" >
            <option value="0">+</option>
            <option value="1">-</option>
            <option value="2">x</option>
            <option value="3">/</option>
        </select>
        <input type="number" name="n2" step="0.01" placeholder="Insira aqui">
        <p><input type="submit" value="Calcular"/></p>
    </form>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>