<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5bfba39935.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista de Usuários</title>
</head>
<body>
<div class="container" style="margin-top:40px" >
    <h3>Aprovar Usuários</h3>
    <br>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Usuário</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

   

    <?php 
     include 'conexao.php';
     $sql = "SELECT * FROM usuarios WHERE status='Inativo' " ;
     $busca = mysqli_query($conexao, $sql);

     while ($array = mysqli_fetch_array($busca)) {
       
         $id_usuario = $array['id_usuario'];
         $nomeusuario = $array['nome_usuario'];
         $mail = $array['mail_usuario'];
         $nivel = $array['nivel_usuario'];

         ?>
     <tr>
     <td> <?php echo $nomeusuario ?> </td>
     <td> <?php echo $mail ?> </td>
     <td> <?php echo $nivel ?> </td>
     <!-- <td> 
         <form action="" method="post">
        <div class="form-group" >
            <select name="nivelusuario" class="form-control">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionários</option>
                     <option value="3">Conferente</option>
     
            </select>
        </div>
        </form>
    </td> -->

     <td> 
       <a class="btn btn-success btn-sm" style="color: #FFFFFF" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=1" role="button"><i class="fal fa-edit"></i>&nbsp;Administrador</a>
       <a class="btn btn-warning btn-sm" style="color: #FFFFFF" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=2" role="button"><i class="fal fa-edit"></i>&nbsp;Funcionario</a>
       <a class="btn btn-secondary btn-sm" style="color: #FFFFFF" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=3" role="button"><i class="fal fa-edit"></i>&nbsp;Conferente</a>
       <a class="btn btn-danger btn-sm" style="color: #FFFFFF" href="_deletar_usuario.php?id=<?php echo $id_usuario?>"  role="button"><i class="fal fa-trash-alt"></i></i>&nbsp;Excluir</a>
    </td>

    </tr>
  <?php   } ?>



</table>
<div style="texte-align: righat">
<a href="menu.php"  role="button" class="btn btn-sm btn-dark">Voltar</a>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>