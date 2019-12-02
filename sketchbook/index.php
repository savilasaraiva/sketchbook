<?php
   session_start();
   if (isset($_SESSION['msg'])):
      echo $_SESSION['msg'];
  endif;
?>
<html>
<head>
<script src="https://sdk.amazonaws.com/js/aws-sdk-2.579.0.min.js"></script>
<script src="/awsJS.js"></script>
<script>listAlbums();</script>
   <title> Inicial </title>
   <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
</head>
<body>


<div class = "container" > 
<h1> Inicial</h1>


<!--<a href = "cadPerfil.php" class = "btn btn-success"> Adicionar perfil </a>  -->
<div class="container">    
        <div id="uploadImg" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Postar</div>
                </div>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file" />
                  <input type="submit" value="Enviar"/>
               </form>
            </div>
        </div>
    </div>

<?php
   if(isset($_SESSION['success'])){
      echo "<div class = 'alert alert-success'>".$_SESSION['success']."</div>";
   }
?>
 <h1>Photo Album Viewer</h1>
<div class="container" id="viewer">

</div>

<!--<table class = "table table-borderd" > 
   <tr>
      <th> Ig </th>
      <th> Senha </th>
   </tr>
  <?php


      require 'config.php'; 


      $perfil = $collection -> find ([]);


      foreach ($perfil as $perfil){ 
         echo "<tr>";
         echo "<td>".$perfil -> ig."</td>";
         echo "<td>".$perfil -> senha."</td>";
         echo "<td>";
         echo "<a href = 'edit.php?' class='btn btn-primary' id =".$perfil -> ig."'class =' ​​btn btn-primary '> Editar </a>";
         echo "<a href = 'delete.php?' class='btn btn-danger' id =".$perfil -> ig."'class =' ​​btn btn-danger '> Excluir </a>";
         echo "</td>";
         echo "</tr>";
      };


   ?>
</table>-->
</div>


<script src="lib/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>