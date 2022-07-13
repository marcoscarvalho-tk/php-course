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
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="../assets/js/sweetalert2.all.js"></script>
</head>
<body>
    <div class ="container">
     <header>
        <h1>Curso PHP</h1>
    </header>
    <section>
        <?php 
        session_start(); 
        require 'language.class.php'; 
        require 'config.php';

        if(!empty($_GET['lang'])){
            $_SESSION['lang'] = $_GET['lang'];
        }
        $lang = new Language(); 
        ?>
        <p><strong>Multilinguagem</strong></p>
        <div class="gradient-buttons">
            <a href="_index.php?lang=en"><button class="btn btn-danger">English</button></a>
            <a href="_index.php?lang=pt-br"><button class="btn btn-success">Português</button></a>
            <a href="_index.php?lang=es"><button class="btn btn-warning">Español</button></a>
        </div>
        <hr/>
        Linguagem definida: <?php echo $lang->getLanguage(); ?>
        <br/>
        Categoria: <?php echo $lang->get('CATEGORIA_PHOTO'); ?>
        <br/>
        Categoria: <?php echo $lang->get('CATEGORIA_CLOTHES') ?>
        <br/>
        <hr/>
       <button class="btn btn-primary"><?php echo $lang->get('BUY'); ?> </button>
       <a href="exit.php"><button class="btn btn-danger"><?php echo $lang->get('LOGOUT'); ?></button></a>
        <br/>
        <?php
        $sql = "SELECT id,(select valor from lang where lang.lang = :lang and lang.nome = categorias.lang_item) as nome FROM categorias";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":lang", $lang->getLanguage());
        $sql->execute();

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $categoria){
                echo $categoria['nome'].'<br/>';
            }
        }
        
        ?>

    </section>
    <footer>
        <p>&copy;B7Web</p>
    </footer> 
    </div>
   
    
</body>
</html>
