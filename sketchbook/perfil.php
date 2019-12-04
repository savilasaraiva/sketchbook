<?php 
  session_start();

  include 'php/config.php';

  if(isset($_GET["id"])){
    $id = $_GET["id"];

    $collection = $col->test;

    $item = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

  }else{
    $id = $_SESSION["id"];

    $collection = $col->test;

    $item = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sketchbook</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
    <link href="./assets/demo/demo.css" rel="stylesheet" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
    <link href="./assets/demo/demo.css" rel="stylesheet" />
  </head>

<body class="profile-page sidebar-collapse">

    <?php include 'topnav-perfil.php';?>

    <div class="page-header header-filter" data-parallax="true" style="background-image: url('./assets/img/city-profile.jpg');"></div>
    <div class="main main-raised">
      <div class="profile-content">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="profile">
                <div class="avatar">
                  <img src="./assets/img/perfis/<?php echo $item->usuario ?>.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                </div>
                <div class="name">
                  <h3 class="title"><?php echo $item->usuario ?></h3>
                  <h6><?php echo $item->nome ?></h6>
                  <?php 
                    if(isset($_GET["id"])){ ?>
                  <p><a href="#" class="btn btn-danger"><i class="material-icons">favorite</i> Seguindo</a></p>
                    <?php } ?>
                  <a href="#" class="btn btn-link disabled"><strong><?php echo sizeof((array)$item->publics) ?></strong> Publicações</a>
                  <a href="#" class="btn btn-link"><strong><?php echo sizeof((array)$item->seguindo) ?></strong> Seguindo</a>
                  <a href="#" class="btn btn-link"><strong><?php echo sizeof((array)$item->seguidores) ?></strong> Seguidores</a>
                  <p><a href="#" class="btn btn-link disabled"><?php echo sizeof((array)$item->curtidas) ?> Recomendações</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="description text-center">
            <p><?php echo $item->bio ?></p>
          </div>
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
                  <img src="../assets/img/examples/studio-1.jpg" class="rounded">
                  <img src="../assets/img/examples/studio-2.jpg" class="rounded">
                </div>
                <div class="col-md-3 mr-auto">
                  <img src="../assets/img/examples/studio-5.jpg" class="rounded">
                  <img src="../assets/img/examples/studio-4.jpg" class="rounded">
                </div>
              </div>
            </div>
            <div class="tab-pane text-center gallery" id="works">
              <div class="row">
                <div class="col-md-3 ml-auto">
                  <img src="../assets/img/examples/olu-eletu.jpg" class="rounded">
                  <img src="../assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                  <img src="../assets/img/examples/cynthia-del-rio.jpg" class="rounded">
                </div>
                <div class="col-md-3 mr-auto">
                  <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                  <img src="../assets/img/examples/clem-onojegaw.jpg" class="rounded">
                </div>
              </div>
            </div>
            <div class="tab-pane text-center gallery" id="favorite">
              <div class="row">
                <div class="col-md-3 ml-auto">
                  <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                  <img src="../assets/img/examples/studio-3.jpg" class="rounded">
                </div>
                <div class="col-md-3 mr-auto">
                  <img src="../assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                  <img src="../assets/img/examples/olu-eletu.jpg" class="rounded">
                  <img src="../assets/img/examples/studio-1.jpg" class="rounded">
                </div>
              </div>
            </div>
          </div>
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
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>

    <?php include 'footer.php';?>

    </body>
</html>
