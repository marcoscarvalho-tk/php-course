<?php
class Usuarios{

    private $pdo;
    private $id;
    private $permissoes;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function fazerLogin($email,$senha){

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";  
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();

            $_SESSION['logado'] = $sql['id'];
            
            return true;
        
        }else{
            return false; 
        }
    }

    public function setUsuarios($id){
         
        $this->id = $id;
    
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
               $sql = $sql->fetch();

               $this->permissoes = explode(',', $sql['permissao']);
        }
    }

    public function getPermissao(){
        return $this->permissoes;
    }

    public function getDados(){
        $dados = array();

        $sql = "SELECT * FROM dados";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){
            return $sql;
        }
        
    }

    public function checkPermissao($p){
        if(in_array($p, $this->permissoes)){
            
            return true;
        }else{

            return false;
        }
    }
}
?>