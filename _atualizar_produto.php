<?php

include 'conexao.php';

$id = $_POST['id'];

//$nroproduto = $_POST['nroproduto']; 
$nomeproduto = $_POST['nomeproduto']; 
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor']; 

$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`= $quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 50px; text-align: center;">

    <h4>Produto atualizado com sucesso!</h4>
    <div style="padding-top:20px">
    <a href="listar_produtos.php" role="button" class="btn btn-sm btn-warning" >Atualizar novo Produto</a>
    </div>


</div>