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
    
    <?php
    // $m = isset($_GET["mt"])? $_GET["mt] : 0;
    $m = $_GET["mt"]?? 0; // !!!!operador de coalescência substituindo o operador ternário.
    for($i = 1; $i <= 10; $i++){
      $res = $m * $i;
        echo " $m  x  $i  =  $res<br/>";
    }
        
    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>