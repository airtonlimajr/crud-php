<?php

include 'conexao.php';

$id = $_POST['id'];
$nomecategoria = $_POST['nomecategoria']; 


$sql = "UPDATE `categoria` SET `nome_categoria`='$nomecategoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 50px; text-align: center;">

    <h4>Atualizado com sucesso!</h4>
    <div style="padding-top:20px">
    <a href="listar_categoria.php" role="button" class="btn btn-sm btn-warning" >Voltar</a>
    </div>


</div>