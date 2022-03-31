<?php



include "conexao.php";


$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ( $nivel == 1) {

    $upadate = "UPDATE usuarios SET status='Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$upadate);
    echo "ADMINISTRADOR APROVADO";
}


if ( $nivel == 2) {

    $upadate = "UPDATE usuarios SET status='Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$upadate);
    echo "FUNCIONARIO APROVADO";
} 


if ( $nivel == 3) {

    $upadate = "UPDATE usuarios SET status='Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$upadate);
    echo "CONFERENTE APROVADO";
} 

header("Location: aprovar_usuario.php");


?>