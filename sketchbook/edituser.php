<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Sketchbook
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>
<body>
    <?php include 'topnav.php';?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">                
                <form action="php/update.php" method="POST">
                    <h2 class="text-cDigite">Editar Usuário</h2>
                    <a href="userlist.php" class="btn btn-success btn-block" >Voltar para a lista de usuários</a>
                    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome"  value="<?php echo $_GET["nome"]; ?>" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $_GET["email"]; ?>" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $_GET["usuario"]; ?>" placeholder="Digite usuario">
                    </div>
                    <div class="form-group">
                        <label for="senha">senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $_GET["senha"]; ?>" placeholder="Digite senha">
                    </div>
                    <input type="submit" value="CONFIRMAR" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!-- Control CDigite for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
</body>
</html>