<?php
  session_start();
  if (isset($_SESSION['msg'])):
      echo $_SESSION['msg'];
  endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Material Kit by Creative Tim
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

<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
          Nome da Rede Social </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <!-- <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">cloud_download</i> Download
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div> -->
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('./assets/img/city-profile.jpg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
               <div class="avatar">
               <img src="./assets/img/faces/christian.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
               </div>
               <div class="name">
                  <h3 class="title">Christian Louboutin</h3>
                  <h6>Designer</h6>
                  <button class="btn btn-primary btn-round">
                     <i class="material-icons">favorite</i> Unfollow
                  </button>
               </div>
            </div>
          </div>
        </div>
        <!-- <div class="description text-center">
          <p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
        </div> -->
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i> Studio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                    <i class="material-icons">palette</i> Work
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#favorite" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite</i> Favorite
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="./assets/img/examples/studio-1.jpg" class="rounded">
                <img src="./assets/img/examples/studio-2.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="./assets/img/examples/studio-5.jpg" class="rounded">
                <img src="./assets/img/examples/studio-4.jpg" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="works">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="./assets/img/examples/olu-eletu.jpg" class="rounded">
                <img src="./assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="./assets/img/examples/cynthia-del-rio.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="./assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="./assets/img/examples/clem-onojegaw.jpg" class="rounded">
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="./assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="./assets/img/examples/studio-3.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="./assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="./assets/img/examples/olu-eletu.jpg" class="rounded">
                <img src="./assets/img/examples/studio-1.jpg" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  <a href = "cadPerfil.php" class = "btn btn-success"> Adicionar perfil </a>  -->
      <div class="row">
         <div class="col-md-6 ml-auto mr-auto">
            <div id="uploadImg" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
               <div class="panel panel-info">
                  <div class="panel-heading">
                        <div class="panel-title">Postar</div>
                  </div>
                  <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
                        <input class type="file" name="file" />
                        <input type="submit" value="Enviar"/>
                  </form> -->
               </div>
            </div>
         </div>
         <div class="col-md-12 ml-auto mr-auto">
            <h3 class="text-center">Photo Album Viewer</h3>
            <div id="viewer"></div>
         </div>
         <div class="col-md-6 ml-auto mr-auto">
         <?php
            if(isset($_SESSION['success'])){
               echo "<div class = 'alert alert-success'>".$_SESSION['success']."</div>";
            }
         ?>

         <a href="cadPerfil.php" class="btn btn-success"> Adicionar perfil </a>

         <table class = "table table-borderd" > 
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
         </table>
         </div> 
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>

  
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

  <!-- Plugin AWS -->
  <script src="https://sdk.amazonaws.com/js/aws-sdk-2.579.0.min.js"></script>
  <script src="./assets/js/plugins/awsJS.js"></script>
  <script>
    listAlbums();
  </script>
</body>

</html>