<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>   
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    
</head> 
<body>
    <div class="container">
        <header>
        <h1>Curso PHP</h1>
        </header>
        <section>
            <form method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control">                
                </div>
                <div class="form-group">               
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control">                
                </div>
                <div class="form-group">
                    <label for="msg">Mensagem:</label>
                    <textarea name="msg" rows="10" class="form-control"></textarea>                
                </div>
                <input type="submit" value="Enviar" class="btn btn-primary">
            </form>  
        </section>
        <footer>
            <p>&copy;B7Web</p>              

	    <?php
	    if(isset($_POST['nome']) && !empty($_POST['nome'])){

	        $nome = addslashes($_POST['nome']);
	        $email = addslashes($_POST['email']);
	        $msg = addslashes($_POST['msg']);

	        $para = "marcosdmgscarvalho@gmail.com";
	        $assunto = "Pergungata do Contato";
	        $corpo = "Nome: ".$nome." - Email: ".$email." - Mensagem: ".$msg;
	        $cabecalho = "From: contato@marcoscarvalho.tk"."\r\n".
	                     "Reply-To: ".$email."\r\n".
	                     "X-Mailer: PHP/".phpversion();
	        mail($para, $assunto, $corpo, $cabecalho);

	        echo "<p><h1>Email enviado com sucesso!</h1></p>";
	    }
	    ?>
        </footer>      
    </div>   
    
</body>
</html>