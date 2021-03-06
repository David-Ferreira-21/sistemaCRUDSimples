<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Cadastro</title>

  </head>

  <body>

    <div class="container">
        <!--Dentro de container vem linhas-->
        <div class="row">
        <!--Dentro de linhas vem colunas-->    
            <div class="col">
                <h1>Cadastro</h1>
        <!--Depois de tudo, preciso de um formulário-->

            <form action="cadastro_script.php" method="POST">
              <div class="form-group">

                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" placeholder="Digite seu nome . . ." name="nome" required>

              </div>

              <div class="form-group">

                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" placeholder="Digite seu endereço . . ." name="endereco">

              </div>

              <div class="form-group">

                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" placeholder="Digite seu número . . ." name="telefone">

              </div>

              <div class="form-group">

                <label for="telefone">E-mail</label>
                <input type="email" class="form-control" placeholder="Digite seu E-mail . . ." name="email">

              </div>

              <div class="form-group">

                <label for="telefone">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento">

              </div>

              <div class="form-group">

                <input type="submit" class="btn btn-success">

              </div>

            </form>

              <a href="index.php" class="btn btn-info">Início</a>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>