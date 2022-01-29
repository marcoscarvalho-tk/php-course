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
        $d = isset($_GET["ds"])? $_GET["ds"]: 0;
      
        switch ($d){
            
            case 2:
            case 3:
            case 4:   
            case 5:
            case 6:
                echo "Levanta e vai estudar";
                break;
            case 7:
            case 8:
                echo "Descanse, pequeno gafanhoto!";
                break;
            default:
                echo "Dia da semana invalido";
        }
         
    ?>
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>