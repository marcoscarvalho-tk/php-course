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
       
        <p><strong>Ordenação</strong></p>
        <?php
            try{
                $pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "");
            } catch(PDOException $e){
                echo "ERRO: ".$e->getMessage();
                exit;
            }
            //esta condição recebe o GET caso tenha sido selecionado
            //o value do metodo GET é inserido na variavel da query a ser enviada
            if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
                $ordem = addslashes($_GET['ordem']);
                $sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
        
        //esta condiçâo envia a query caso não tenha sido selecionada a opção        
            }else{
                $ordem ="";
                $sql = "SELECT * FROM usuarios";
            }

        ?>
        <form method="GET">
            <!--A função this.form.submit() dispensa o uso de um input extra
            bastando apenas a seleção da opção para o envio pelo metodo GET-->
            Opções:
            <select name="ordem" onchange="this.form.submit()">
            <!--O option associado com um operador ternario tem função mostrar a opção
             selecionada fixa dentro do select apos sua escolha -->   
                <option></option>
                <option value="id"<?php echo ($ordem =='id')?'selected="selected"':'' ?>>Pelo Id</option>
                <option value="nome"<?php echo ($ordem =='nome')?'selected="selected"':'' ?>>Pelo nome</option>
                <option value="idade"<?php echo ($ordem =='idade')?'selected="selected"':'' ?>>Pela idade</option>
                
            </select>
        </form>    
        <table  width="500">
            <tr>
                <th>Id</th>
                <th>Nome:</th>
                <th>Idade:</th>
            </tr>
            <?php
            
                //$sql = "SELECT * FROM usuarios ORDER BY idade ASC";
                $sql = $pdo->query($sql);
             
             //esta condição faz a relação de cadastrados caso haja algum   
                if($sql->rowCount() > 0){
                    foreach($sql->fetchAll() as $usuario){
                        
                        //aqui é possive gerar a tabela de uma outra forma 
                        //apos o foreach() insira ':' no lugar de abrir e fechar chaves
                        //consulte a dicaPHP no diretorio cursoPHP02.
                        echo '<tr>';
                            echo '<td>'.$usuario['id'].'</td>';
                            echo '<td>'.$usuario['nome'].'</td>';
                            echo '<td>'.$usuario['idade'].'</td>'; 
                        echo '</tr>';
                    }    
                        
                } 
            ?>
        </table>
      
    <p> <a href="http://localhost/cursophp02/orderby.php"><input type="button" value="VOLTAR"></a></p>
    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer>
    
</body>

</html>
                      
