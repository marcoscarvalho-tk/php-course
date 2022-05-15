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
    <fieldset >
    <legend><strong>PHP</strong></legend>
    <p>Gerador de Tabuada</p>
    <form method="POST">
        Inicio:
        <input class="inpt" type="number" name="mult1"><br/><br/>
        Final:
        <input class="inpt" type="number" name="mult2"><br/><br/>
        <input class="bt" type="submit" value="Gerar"><br/><br/>
    </form>
    
        
    <?php
    
    $start = isset($_POST['mult1'])? $_POST['mult1']:'';
    $end = isset($_POST['mult2'])? $_POST['mult2']:'';

    if(!empty($start) && !empty($end)){
        echo '<table border="3" width="450">';
        
        for($i=$start;$i<=$end;$i++){
            echo '<tr>';
            for($c=$start;$c<=$end;$c++){
                echo '<td>'.($c * $i).'</td>'; 
            }
            echo '<tr/>';
        }
                
        echo '</table>';
    }else{
        echo '<hr/><br/>Insira o número de início e o final';
    }
    ?>
   
    </fieldset>
    </section>
    </body>
</html>