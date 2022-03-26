<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Adicionar categoria</title>
</head>
<body>
   

<div class="container" style="margin-top:40px; width:500px" >
    <h4 style="margin-bottom: 35px"> Cadastro Categoria</h4>
    <form action="_inserir_categoria.php" method="post">
        <div class="form-group">
            <label>Categoria</label>
            <input type="text" name="categoria" class="form-control" placeholder="Digite a categoria." autocomplete="off" >
        </div>
        <div style="margin-top:15px; text-align: right;">
            <button type="submit" class="btn btn-primary btn-sm" >Cadastrar</button> 
            <a href="index.php"  role="button" class="btn btn-sm btn-dark">Voltar</a>   
        </div>
        
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></scrip>
</body>
</html>