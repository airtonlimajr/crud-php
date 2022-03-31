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

<div class="container" style="width: 400px;  margin-top: 100px">
    <h4>Cadastro de Usuário </h4>
    <form action="_insert_usuario_externo.php" method="post">
        <div class="form-group">
            <label> Nome do Usuário</label>
            <input type="text" name="nomeusuario"  class="form-control" required autocomplete="off" placeholder="Nome Completo"> 
        </div>

    <div class="form-group">
            <label> E-mail</label>
            <input  type="email" name="mailusuario"  class="form-control" required autocomplete="off" placeholder="Seu e-mail."> 
        </div>
        <div class="form-group">
            <label> Senha</label>
            <input id="txtSenha" name="senhausuario" type="password" class="form-control" required placeholder="Digite uma Senha" title="Senha" /> 
        </div>
        <div class="form-group">
            <label>Repitir Senha</label>
            <input id="repetir_senha" name="repetir_senha" type="password" class="form-control" required  placeholder="Repetir Senha" title="Repetir Senha" oninput="validaSenha(this)" />
            <small>Precisa ser igual a senha digitada acima.</small>
        </div>

        <!-- <div class="form-group">
            <label>Nível de Acesso</label>
            <select name="nivelusuario" class="form-control">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionários</option>
                     <option value="3">Conferente</option>
     
            </select>
        </div> -->
        <div style="text-align: right; margin-top: 15px">
            <button type="submit" class="btn btn-sm btn-success" >Cadastrar</button>
            <a href="menu.php" class="btn btn-sm btn-dark" >Voltar</a>
        </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>
</html>