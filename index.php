<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tela de Login</title>
</head>


<style type="text/css">

.container {
    margin-top: 10%;
    width: 500px;
    font-family: 'Roboto', sans-serif;
    -webkit-box-shadow: 22px 17px 36px -31px rgba(0,0,0,0.75);
-moz-box-shadow: 22px 17px 36px -31px rgba(0,0,0,0.75);
box-shadow: 22px 17px 36px -31px rgba(0,0,0,0.75);
}
</style>
<body>


    <div class="container" style="border-radius:15px; border: 2px solid #F3F3F3" >
        <div style="padding: 10px">
            <div class="img-locked" style="text-align: center">
                <img src="https://cdn-icons-png.flaticon.com/512/3427/3427189.png" width="125px" height="125px" >
            </div>
            <form>
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="usuario" class="form-control" placeholder="Senha" autocomplete="off" required>
                </div>
            </form>
            <div style="text-align: right" >
            <button type="submit"  class="btn btn-sm btn-success" style="margin-top: 5%">Entrar</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" ></script>
</body> 
</html>