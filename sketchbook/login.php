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
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form class="form" action="php/login.php" method="POST">
                    <div class="card-header card-header-primary text-center">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <p class="description text-center">Sketchbook</p>
                    <div class="card-body">
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="material-icons">person</i>
                            </span>
                        </div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Ig ou Email" required>
                        </div>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <div class="form-group">
                            <input type="submit" value="LOGIN" class="btn btn-primary btn-wd btn-lg">
                        </div>
                        <a href="./cadPerfil.php" class="btn btn-primary btn-link btn-wd btn-lg">Cadastrar</a>
                    </div>
                    </form>                    
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
</body>
</html>