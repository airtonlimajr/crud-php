<?php


include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';


$sql = "INSERT INTO usuarios (nome_usuario,mail_usuario,senha_usuario, nivel_usuario, status) values ('$nomeusuario', '$mail', sha1('$senha'),$nivel, '$status')";

$inserir = mysqli_query($conexao, $sql);

?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 50px; text-align: center;">

    <h4>Usuário adicionado com sucesso!</h4>
    <div style="padding-top:20px">
    <a href="cadastro_usuario.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>


</div>
