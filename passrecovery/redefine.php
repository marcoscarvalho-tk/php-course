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

if(!empty($_GET['token'])){
    $token = isset($_GET['token'])? $_GET['token']:'';

    $sql = "SELECT * FROM token WHERE hash = :hash AND used = 0 AND expired_in > NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":hash", $token);
    $sql->execute();

    if($sql->rowCount() > 0){
        $row = $sql->fetch();
        $id = $row['id_usuario'];

        if(!empty($_POST['senha'])){
            $senha = isset($_POST['senha'])? $_POST['senha']:'';

            $sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":senha", $senha);
            $sql->bindValue(":id", $id);
            $sql->execute();

            $sql = "UPDATE token SET used = 1 WHERE hash = :hash";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":hash", $token);
            $sql->execute();
            
            echo "Senha alterada com sucesso!";

            exit;
        }

       
    }else{
        echo "Token usado ou inválido";
        exit;
    }
}
?>
        <p><strong>Password Recovery</strong><br/>(Recuperar Senha)</p>
        <h3><strong> Digite a nova Senha</strong></h3>

        <form method="POST" class="w-50 mx-auto">
                <div class="form-group">               
                    <label for="senha">Nova Senha</label>
                    <input type="password" name="senha" class="form-control text-center">                
                </div> 
                <a href="_index.php" class="btn btn-primary">Voltar</a>               
                <input type="submit" value="Mudar senha" class="btn btn-success">
        </form>        
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
   
    
</body>
</html>