<?php
	if(isset($_SESSION['authentication'])){
        ?>
		
        
	<?php }else{
	
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
				
			}else{

            }
        }
?>
<?php
   if(isset($_SESSION['error'])){
      echo "<div class = 'alert alert-danger'>".$_SESSION['error']."</div>";
   }
?>
<html>
<head>
   <title> Inicial </title>
   <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="container">    
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                    </div>
                    <form method="POST">
                        <div class="form-group">
                            <label for="email">Email ou ig</label>
                            <input type="text" class="form-control" name="ig" id="email">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-success">Entrar</button>
                        </div>
                    </form>
                    <a href = "cadPerfil.php" class = "btn btn-success"> Cadastrar </a> 
                </div>
            </div>
        </div>
    </div>
<script src="lib/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>