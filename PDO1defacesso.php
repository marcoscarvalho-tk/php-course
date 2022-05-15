
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
        <p><strong> PDO <br> PHP acessando BD</strong></p>
       
        <?php
        //PDO é uma biblioteca resposável por fazer a conexão entre o php e o BD
        //no exemplo temos o SGBD com o BD e o host associado, no caso o IP é localhost.
        $dsn = "mysql:dbname=blog;host=127.0.0.1";
        $dbuser = "root";
        $dbpass = "";


        try{
            $pdo = new PDO($dsn, $dbuser, $dbpass);
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);
            
            if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $usuario){
                echo "Nome:".$usuario["nome"].
                " Email: ".$usuario["email"].
                " Id nr: ".$usuario["id"].
                " Senha: ".$usuario["senha"]."<br/>";
                    
            }
            }else{
                echo "Não há usuários cadastrados!";
            }
        } catch(PDOException $e){
            echo "Falhou: ".$e->getMessage();
        }
        ?>
   
    <p><a href="javascript:history.go(-1)"><input type="button" value="voltar"></a></p>
    </section>
    <footer>
        <p>&copy;</p>
    </footer>
    
</body>
</html>