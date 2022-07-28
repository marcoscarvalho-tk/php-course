<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>    
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>   
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <div class ="container">
     <header>
        <h1>Curso PHP</h1>

    </header>
    <section>
    <?php
    require 'config.php';

    if(!empty($_POST['email'])){

        $email = isset($_POST['email'])?$_POST['email']:'';

        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $sql = $pdo->prepare($sql);
        $sql->execute(array($email));

        if ($sql->rowCount() > 0){
            $row = $sql->fetch();
            $id = $row['id'];
            $token = md5(time().rand(0, 9999).rand(0, 9999));

            $sql = "INSERT INTO token VALUES (NULL, :id_usuario, :hash, 0, :expired_in)";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id_usuario", $id);
            $sql->bindValue(":hash", $token);
            $sql->bindValue(":expired_in", date('Y-m-d H:i', strtotime('+2 months')));
            $sql->execute();

            $link = "<a href='redefine.php?token=".$token."'>Clique Aqui!";
            $mensagem = "Click no link para redifinir sua senha: <br/>".$link;
            $assunto = "Redefinição de senha";
            $headers = 'From: marcosdmgscarvalho@gmail.com'."\r\n". 
                        'X-Mailer: PHP/'.phpversion();

            //mail($email, $assunto, $mensagem, $headers);
            echo $mensagem;

            exit;
        }
    }
    
    ?>
        <p><strong>Password Recovery</strong><br/>(Recuperar Senha)</p>
        <h3><strong> Informe o seu Endereço de Email</strong></h3>
        <form method="POST" class="w-50 mx-auto">
                <div class="form-group">               
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control text-center">                
                </div> 
                <a href="_index.php" class="btn btn-primary">Voltar</a>               
                <input type="submit" value="Enviar" class="btn btn-success">
        </form>        
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
   
    
</body>
</html>