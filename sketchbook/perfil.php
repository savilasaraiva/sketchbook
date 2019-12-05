<?php 
  session_start();

  include 'php/config.php';

  function searchSegRec($value, $array){ 
    return(in_array($value, $array));
  } 
  
  if(isset($_GET["id"])){
    $id = $_GET["id"];

    $collection = $col->test;

    $item = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($id)));

    $isSeg = searchSegRec($_SESSION["id"], (array)$item->seguidores);
    $isCut = searchSegRec($_SESSION["id"], (array)$item->curtidas);

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
                  <p>
                  <?php 
                    if(isset($_GET["id"]) && $_GET["id"]!= $_SESSION["id"]){ 
                      
                      if($isSeg){?>
                    <a href="php/rvseguidores.php?id=<?php echo $id ?>&idUser=<?php echo $_SESSION["id"] ?>" class="btn btn-danger"><i class="material-icons">favorite</i> Seguindo</a>
                <?php }else{ ?>
                    <a href="php/seguidores.php?id=<?php echo $id ?>&idUser=<?php echo $_SESSION["id"] ?>" class="btn btn-danger"><i class="material-icons">favorite_border</i> Seguir</a>
                <?php        
                      }
                      if($isCut){?>
                    <a href="php/rvcurtidas.php?id=<?php echo $id ?>&idUser=<?php echo $_SESSION["id"] ?>" class="btn btn-warning"><i class="material-icons">star</i> Recomendado</a>
                <?php }else{ ?>
                    <a href="php/curtidas.php?id=<?php echo $id ?>&idUser=<?php echo $_SESSION["id"] ?>" class="btn btn-warning"><i class="material-icons">star_border</i> Recomendar</a>
                <?php        
                      }
                    } ?>
                  </p>
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
          <div class="images">            
            <?php
              foreach ((array)$item->publics as $key => $value) {
                if($key%4 == 0 || $key==0) echo '<div class="row">';
                if($key==0){
                  echo '<div class="col-sm-3">';
                } else if($key%2 == 0) echo '<div class="col-sm-3 ml-auto">';
                
            ?>             
                <img src="./assets/img/publics/<?php echo $value; ?>" class="img-raised rounded img-fluid">
            <?php
              if($key%2 == 0 || $key==0) echo '</div>';
              if($key%4 == 0 || $key==0) echo '</div>';
              }
            ?>
            </div>
            <div class="space-50"></div>
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
