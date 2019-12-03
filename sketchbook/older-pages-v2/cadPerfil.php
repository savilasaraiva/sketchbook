<?php
	if(isset($_SESSION['authentication'])){
        header("Location: index.php");
    }else{	
		if(isset($_POST['submit'])){
			$postedUsername = $_POST['ig']; //Gets the posted username, put's it into a variable.
            $postedPassword = $_POST['senha']; //Gets the posted password, put's it into a variable.
            require 'config.php'; 
            $perfil = $collection -> find(array('ig' => $postedUsername));
				//Iterates through the found results
                foreach($perfil as $userFind) {
                    $storedUsername = $userFind['ig'];
                    $storedPassword = $userFind['senha'];
				}
	
				if($postedUsername == $storedUsername && $postedPassword == $storedPassword){ 
                    $_SESSION['authentication'] = 1;
                    //$_SESSION['success'] = "Book created successfully";
                    header("Location: index.php");
				}else{					
                    $wrongflag = 1;
                    $_SESSION['error'] = "deu merda";
                    
				}			
			}
        }
    if(isset($_SESSION['error'])){
        echo "<div class = 'alert alert-danger'>".$_SESSION['error']."</div>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Sketchbook
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('./assets/img/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form action='login.php' class="form" method="POST">
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
                        <input type="text" class="form-control" placeholder="Ig ou Email" required>
                        </div>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                            </span>
                        </div>
                        <input type="password" class="form-control" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <div class="form-group">
                            <input type="submit" value="login" name="login" class="btn btn-primary btn-wd btn-lg"/>
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
