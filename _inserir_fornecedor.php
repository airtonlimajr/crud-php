<?php


include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql =" INSERT INTO fornecedor (nome_form) values ('$fornecedor')";
$inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 50px; text-align: center;">

    <h4>Adicionado com sucesso!</h4>
    <div style="padding-top:20px">
    <a href="adicionar_fornecedor.php" role="button" class="btn btn-sm btn-warning" >Voltar</a>
    </div>


</div>