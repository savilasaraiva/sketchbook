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
<body class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('./assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <!-- <div class="col-md-6 mt-5">                
                <form action="php/register.php" method="POST">
                    <h2 class="text-center">Cadastrar</h2>
                    <a href="login.php" class="btn btn-success btn-block" >Voltar para o login</a>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="username">Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite usuário">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite senha">
                    </div>
                    <div class="form-group">
                        <label for="confirm">Confirme a senha</label>
                        <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Repita a senha">
                    </div>
                    <input type="submit" value="Cadastrar" class="btn btn-primary btn-block">
                </form>
            </div> -->
            <div class="row">
                <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                    <div class="card card-nav-tabs">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Cadastrar</h4>
                        </div>
                        <div class="card-body ">
                            <form action="php/register.php" method="POST">                                
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
                                </div>
                                <div class="form-group">
                                    <label for="username">Usuário</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite usuário">
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite senha">
                                </div>
                                <div class="form-group">
                                    <label for="confirm">Confirme a senha</label>
                                    <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Repita a senha">
                                </div>
                                <input type="submit" value="Cadastrar" class="btn btn-success float-right">
                                <a href="login.php" class="btn btn-default float-left" >Voltar para o login</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
        <div class="container">
            <div class="copyright float-center">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, feito com <i class="material-icons">favorite</i> por
            <a href="#DJS" target="_blank">DJS</a>.
            </div>
        </div>
        </footer>
    </div>

    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
    
    <script>
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm");

        function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>