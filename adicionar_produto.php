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
<title>Formulário de Cadastro</title>

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

        <form action="_inserir_produto.php"  method="post" style="margin-top: 30px;">

        <div class="form-group">
        <label class="form-label">Nro Produto</label>
        <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" required autocomplete="off">
        </div>

        <div class="form-group">
        <label class="form-label">Nome Produto</label>
        <input type="string" class="form-control" name="nomeproduto" placeholder="Insira o nome Produto" required autocomplete="off">
        </div>
       

        <div class="form-group">
        <label class="form-label">Categoria</label>
        <select class="form-control"  name="categoria">

         <?php 

          include 'conexao.php';

        $sql = "SELECT * FROM categoria order by nome_categoria ASC";
        $buscar = mysqli_query($conexao, $sql);

        while ($array = mysqli_fetch_array($buscar)){
            $id_categoria = $array['id_categoria'];
            $nome_categoria = $array['nome_categoria']

       
        ?>
        <option><?php echo $nome_categoria ?></option>

        <?php  } ?>
        </select>
        </div>

        <div class="form-group">
        <label class="form-label">Quantidade</label>
        <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" required autocomplete="off">
        </div>

        <div class="form-group">
        <label >Fornecedor</label>
        <select class="form-control" name="fornecedor">
        <?php 

            include 'conexao.php';

            $sql2 = "SELECT * FROM fornecedor order by nome_form ASC";
            $buscar2 = mysqli_query($conexao, $sql2);

            while ($array2 = mysqli_fetch_array($buscar2)){
            $id_form = $array2['id_form'];
            $nome_form = $array2['nome_form']


            ?>


           <option><?php echo $nome_form ?></option>
            <?php  } ?>
        </select>
        </div>

        <div style="text-align: right; margin-top: 2%;">
            <button type="submit" id="botao"  class="btn btn-sm">Cadastrar</button>
            <a href="menu.php"  role="button" class="btn btn-sm btn-dark">Voltar</a>
        </div>

        
        </form>

        
    </div>



<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>