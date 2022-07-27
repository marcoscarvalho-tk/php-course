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
        <p><strong>Password Recovery</strong><br/>(Recuperar Senha)</p>
        <h1><strong> Login</strong></h1>
        <form method="POST" class="w-50 mx-auto">
                <div class="form-group">               
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control text-center">                
                </div>
                <div class="form-group">               
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control text-center">                
                </div>
                <input type="submit" value="Entrar" class="btn btn-success">
        </form> 
        <?php
            if(isset($_POST['senha']) && !empty($_POST['email'])):?>
            <script type='text/javascript'>Swal.fire({ 
                        icon: "error",
                        title: "Oops...!",
                        text: "Email e/ou senha inválida!",
                        type: "error"})
            ;</script>

            <hr> 
            <p class="alert alert-warning"> <i class="fas fa-exclamation-triangle">                    
                </i> Esqueceu a senha?<a href="passrecovery.php"> Clique aqui!</a></p>  

        <?php endif; ?>
    </section>       
    <footer>
        <p>&copy;</p>
    </footer>
    </div>
 
</body>
</html>