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
   
        <p><strong>Sistema de Envio de Mensagens</strong></p>
        <?php
        try{
            $pdo = new PDO('mysql:dbname=blog;host=localhost', "root", "");

        }catch(PDOExeption $e){
            echo "ERRO: ".$e->getMessage();
            exit;
        }
        
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = $_POST['nome'];
            $mensagem = $_POST['mensagem'];

            $sql = $pdo->prepare("INSERT INTO mensagens (data_msg,nome,msg) VALUES (NOW(),'$nome','$mensagem')");
            
            $sql->execute();
        }
        ?>
        
        <fieldset>
        <form method="POST">
        Nome:<br/>
            <input type="text" name="nome"/><br/><br/>

        Mensagem:<br/>
            <textarea name="mensagem"></textarea><br/><br/>

            <input type="submit" value="Enviar Mensagem"/>
        </form>
        </fieldset>
        <?php
         $sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
         $sql = $pdo->query($sql);
         if($sql->rowCount() > 0){
             foreach($sql->fetchAll() as $mensagem){
                 echo '<p><strong>'.$mensagem['nome'].'</strong></p>';
                 echo $mensagem['data_msg'];
                 echo '<br/>';
                 echo $mensagem['msg'];
                 echo '<hr/>';
             }
         }else{
             echo "Não há mensagens!";
         }
        ?>
   
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>