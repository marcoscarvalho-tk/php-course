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
        $n = isset($_GET["num"])? $_GET["num"]: 0;
        $o = isset($_GET["oper"])? $_GET["oper"]: 1;
        switch ($o){
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n); // $n ^ (1/2)
                break;
            
        }
        echo "O resultado da operação solicitado foi <strong>$r</strong>";
    ?>
    <p><a href="aula10_switch.html"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy; Cursoemvideo</p>
    </footer>
    
</body>
</html>