<?php

include 'conexao.php';

$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<title>Atualizar Produtos</title>

<style type="text/css">

.container {
  whidth: 500px;
  font-family: 'Roboto', sans-serif;
}

#botao {
    background-color: #FF1168;
    color: #FFFFFF;
    font-weight: bold;
    
}

</style>
</head>
<body>
   <div class="container" id="tamanhoContainer" style="margin-top:20px">

   <h4 style="margin-top: 30px;">Formulário de Cadastro</h4>

        <form action="_atualizar_produto.php"  method="post" style="margin-top: 30px;">
        <?php
        $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
        
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)){

            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['nroproduto'];
            $nomeproduto = $array['nomeproduto'];
            $categoria = $array['categoria'];
            $quantidade = $array['quantidade'];
            $fornecedor = $array['fornecedor'];
        
        ?>

        <div class="form-group">
        <label class="form-label">Nro Produto</label>
        <input type="number" class="form-control" name="nroproduto"  value="<?php echo $nroproduto ?>" disabled>
        <input type="number" class="form-control" name="id"  value="<?php echo $id ?>" style="display:none">
        </div>

        <div class="form-group">
        <label class="form-label">Nome Produto</label>
        <input type="string" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
        </div>
       

        <div class="form-group">
        <label class="form-label">Categoria</label>
        <select class="form-control"  name="categoria" >
        <option value="1">Periféricos</option>
        <option value="2">Hardware</option>
        <option value="3">Software</option>
        </select>
        </div>

        <div class="form-group">
        <label class="form-label">Quantidade</label>
        <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
        </div>

        <div class="form-group">
        <label >Fornecedor</label>
        <select class="form-control" name="fornecedor">
            <option value="1">Fornecedor A</option>
            <option value="2">Fornecedor B</option>
            <option value="3">Fornecedor C</option>
        </select>
        </div>

        <div style="text-align: right; margin-top: 2%;">
            <button type="submit" id="botao"  class="btn btn-sm">Atualizar</button>
        </div>

        <?php } ?>
        </form>
    </div>



<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>