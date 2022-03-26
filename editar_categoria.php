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
<title>Edição de categoria</title>

<style type="text/css">

.container {
  whidth: 500px;
  font-family: 'Roboto', sans-serif;
}

    button#botao {
    background-color: #FF1168;
    color: #FFFFFF;
    font-weight: bold; }

</style>

</head>
<body>
   <div class="container" id="tamanhoContainer" style="margin-top:20px">

   <h4 style="margin-top: 30px;">Formulário de Edição</h4>

        <form action="_atualizar_categoria.php"  method="post" style="margin-top: 30px;">

        <?php
        
        $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)){

            $id_categoria = $array['id_categoria'];
            $nomecategoria = $array['nome_categoria'];
    
        
        ?>

        <div class="form-group">
        <label class="form-label">Nome Categoria</label>
        <input type="string" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>">
        <input type="string" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display:none">
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