<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>

<?php 

$_SESSION['usuario'];

if(!isset($_SESSION['usuario'])) {
  header('Location: index.php');
}

?>

<div class="container" style="margin-top:100px">
<div class="row">

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Produtos</h5>
        <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
        <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produtos</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Visualizar, editar e excluir os produtos.</p>
        <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6"style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Categoria</h5>
        <p class="card-text">Opção para adicionar categoria de produtos.</p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar fornecedor</h5>
        <p class="card-text">Opção para adicionar fornecedores.</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedor</a>
      </div>
    </div>
  </div>

</div>
<div class="col-sm-6" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados.</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
      </div>
    </div>
  </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>