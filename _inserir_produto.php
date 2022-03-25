<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; //Recebe o valor do atributo name nro produto
$nomeproduto = $_POST['nomeproduto']; //Recebe o valor do atributo name nome produto
$categoria = $_POST['categoria'];//Recebe o valor do atributo name categoria
$quantidade = $_POST['quantidade'];//Recebe o valor do atributo name quantidade
$fornecedor = $_POST['fornecedor']; //Recebe o valor do atributo name fornecedor


 $sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

 $inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 50px; text-align: center;">

    <h4>Produto Adicionado com sucesso!</h4>
    <div style="padding-top:20px">
    <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Produto</a>
    </div>


</div>