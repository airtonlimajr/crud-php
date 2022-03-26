<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5bfba39935.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista de Categoria</title>
</head>
<body>
<div class="container" style="margin-top:40px">
    <h3>Lista de Categorias</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

   

    <?php 
     include 'conexao.php';
     $sql = "SELECT * FROM `categoria`";
     $busca = mysqli_query($conexao, $sql);

     while ($array = mysqli_fetch_array($busca)) {
       
         $id_categoria = $array['id_categoria'];
         $nomecategoria = $array['nome_categoria'];

         ?>
     <tr>
     <td> <?php echo $nomecategoria ?> </td>

     <td> 
       <a class="btn btn-warning btn-sm" style="color: #FFFFFF" href="editar_categoria.php?id=<?php echo $id_categoria?>" role="button"><i class="fal fa-edit"></i>&nbsp;Editar</a>
       <a class="btn btn-danger btn-sm" style="color: #FFFFFF" href="deletar_categoria.php?id=<?php echo $id_categoria?>" role="button"><i class="fal fa-trash-alt"></i></i>&nbsp;Excluir</a>
    </td>

    </tr>
  <?php   } ?>



</table>
<div style="texte-align: righat">
<a href="index.php"  role="button" class="btn btn-sm btn-dark">Voltar</a>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>