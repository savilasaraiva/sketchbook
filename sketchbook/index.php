<?php session_start();

  if(isset($_SESSION['usuario'])){
    
  }else {
    header("Location: login.php");
  }

    include 'php/config.php';

    $collection = $col->test;
    $item = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($_SESSION['id'])));
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
    <!-- CSS Files -->
    <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body>

     <?php include 'topnav.php'; ?> 

    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">@<?php echo $item->usuario ?></div>
                        <div class="h7 text-muted">Nome: <?php echo $item->nome ?></div>
                        <div class="h7"><?php echo $item->bio ?></div>
                        <div class="group-item">
                            <div class="h6 text-muted">Seguidores <strong><?php echo sizeof((array)$item->seguidores); ?></strong></div>
                            <div class="h6 text-muted">Seguindo <strong><?php echo sizeof((array)$item->seguindo); ?></strong></div>
                            <div class="h6 text-muted">Recomendações <?php echo sizeof((array)$item->curtidas); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 gedf-main">
                <div class="card">
                    <div class="card-header card-header-primary">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <h4>Imagens</h4>                        
                    </div>
                    <div class="card-body ">
                        <?php
                            if(isset($_SESSION['success'])){
                                echo 
                                '<div id="alert-message" class="alert alert-success">
                                    <div class="container">
                                    <div class="alert-icon">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                    </button>
                                    <b>Alerta: </b> '.$_SESSION['success'].'
                                    </div>
                                </div>';
                            }else if(isset($_SESSION['error'])){
                                echo 
                                    '<div id="alert-message" class="alert alert-danger">
                                        <div class="container">
                                        <div class="alert-icon">
                                            <i class="material-icons">error_outline</i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                        </button>
                                        <b>Alerta: </b> '.$_SESSION['error'].'
                                        </div>
                                    </div>';
                            }else if(isset($_SESSION['warning'])){
                                echo 
                                    '<div id="alert-message" class="alert alert-warning">
                                        <div class="container">
                                        <div class="alert-icon">
                                            <i class="material-icons">error_outline</i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                        </button>
                                        <b>Alerta: </b> '.$_SESSION['warning'].'
                                        </div>
                                    </div>';
                            }else if(isset($_SESSION['dark'])){
                                echo 
                                    '<div id="alert-message" class="alert alert-dark">
                                        <div class="container">
                                        <div class="alert-icon">
                                            <i class="material-icons">error_outline</i>
                                        </div>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                        </button>
                                        <b>Alerta: </b> '.$_SESSION['dark'].'
                                        </div>
                                    </div>';
                            }
                        
                        ?>
                        <form method="POST" enctype="multipart/form-data" action="php/upload.php" class="custom-file">
                            <div class="form-group">
                                <input type="file" class="custom-file-input" id="customFile" name="arquivo">
                                <label class="custom-file-label" for="customFile"><i class="material-icons">add_photo_alternate</i></label>
                            </div>
                            <br/>
                            <div class="btn-group">
                                <input type="submit" class="btn btn-primary" value="Publicar" />
                            </div>
                        </form>
                    </div>
                </div>

                <?php                    
                    foreach((array)$item->seguindo as $key => $value){
                        $user = $collection->findOne(array('_id' => new MongoDB\BSON\ObjectID($value)));
                        //print_r((array)$user->publics);
                        foreach((array)$user->publics as $public){
                    ?>
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <img class="rounded-circle" width="45" src="./assets/img/perfis/<?php echo $user->usuario; ?>.jpg" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">@<?php echo $user->usuario; ?></div>
                                            <div class="h7 text-muted"><?php echo $user->nome; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <img src="./assets/img/publics/<?php echo $public; ?>" class="img-raised rounded img-fluid">
                                </div>
                            </div>
                        </div>
                <?php       }
                        }  ?>
            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
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

    <script type="text/javascript">
        $("#alert-message").fadeTo(2000, 500).slideUp(500, function(){
            $(this).slideUp(500);
            $(this).remove();
        });
    </script>

    <?php include 'footer.php';?>

    </body>
</html>