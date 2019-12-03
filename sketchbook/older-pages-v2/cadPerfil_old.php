<?php
session_start();

if(isset($_POST['submit'])){
   require 'config.php';

   $insertOneResult = $collection->insertOne([
       'nome' => $_POST['nome'],
       'ig' => $_POST['ig'],
       'senha' => $_POST['senha'],
   ]);

   $_SESSION['success'] = "Book created successfully";
   header("Location: index.php");
}
?>

<html>
<head>
    <title>Sts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Cadastrar</div>
                </div>
                <form method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email ou ig</label>
                        <input type="text" class="form-control" name="ig" id="email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="lib/bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>