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
    <fieldset style="height: 500px; padding-top: 50px" >
    <p><strong>Calculadora de Impostos</strong>
              
    <form method="POST">
        Valor do produto:
        <input class="inpt" type="number" name="valor"><br><br>
        Taxa de imposto:
        <input class="inpt" type="number" name="taxa"><br><br>
        <input class="bt" type="submit" value="Calcular">
    </form>  
        <?php
        
        $valor = isset($_POST['valor'])? intval($_POST['valor']) : '';
        $taxa = isset($_POST['taxa'])? intval($_POST['taxa']) : '';
        

        if(isset($_POST['valor']) && !empty($valor)){
            $valfinal = intval(($valor - (($taxa/100) * $valor)));
            echo "<br/>valor do produto: R$ ".$valor;
            echo "<br/>Taxa de imposto: ".$taxa."%";
            echo "<hr/>";
            echo "Imposto: R$ ".($taxa/100) * $valor;
            echo "<br/>Produto : R$ ".$valfinal;
        }else{
            echo "<br/><strong>Preencha devidamente os campos!</strong>";
        }
                
        ?>
    
    </fieldset>
    </section>
    
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>
</html>