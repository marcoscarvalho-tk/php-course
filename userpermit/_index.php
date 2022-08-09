<?php
session_start();
require 'config.php';
require 'usuarios.class.php';

if(!isset($_SESSION['logado'])){
    header("Location: _index.php");
}

$usuarios = new Usuarios($pdo);
$usuarios->setUsuarios($_SESSION['logado']);

$permissao = $usuarios->getPermissao();
$dados = $usuarios->getDados();

if($usuarios->checkPermissao('ADMIN')): ?>
<a href="">Adicionar novo usuário</a><br>
<?php endif; ?>

<?php if($usuarios->checkPermissao('ADMIN')): ?>
<a href="secreto.php">Página secreta</a><br>
<?php endif; ?>

<table border="1">

    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Ações</th>
    </tr>

    <?php foreach($dados->fetchAll() as $dado) : ?>
    <tr>
        <td><?php echo $dado['nome']; ?></td>
        <td><?php echo $dado['email']; ?></td>
        <td><?php echo $dado['telefone'] ?></td>
        <?php if($usuarios->checkPermissao('EDIT')): ?>
            <td>
                <a href="">Editar</a>
            </td>
        <?php endif; ?>
        <?php if($usuarios->checkPermissao('DEL')): ?>
            <td>
                <a href="">Excluir</a>
            </td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>