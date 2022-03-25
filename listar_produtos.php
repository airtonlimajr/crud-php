<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>listagem de Produtos</title>
</head>
<body>
<div class="container" style="margin-top:40px">
    <h3>Lista de Produtos</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nro produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
    </tr>
  </thead>

   

    <?php 
     include 'conexao.php';
     $sql = "SELECT * FROM `estoque`";
     $busca = mysqli_query($conexao, $sql);

     while ($array = mysqli_fetch_array($busca)) {
         $id_estoque = $array['id_estoque'];
         $nroproduto = $array['nroproduto'];
         $nomeproduto = $array['nomeproduto'];
         $categoria = $array['categoria'];
         $quantidade = $array['quantidade'];
         $fornecedor = $array['fornecedor'];
         ?>
     <tr>
     <td> <?php echo $nroproduto ?> </td>
     <td> <?php echo $nomeproduto ?> </td>
     <td> <?php echo $categoria ?> </td>
     <td> <?php echo $quantidade ?> </td>
     <td> <?php echo $fornecedor ?> </td>
  <?php   } ?>

    </tr>

</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>