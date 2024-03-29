<?php
    include 'php/config.php';

    session_start();

    $search = $_GET['searchuser'];

    $collection = $col->test;

    $rows = $collection->find(array( 'nome' => array ('$regex' => $search)));

    $count = $collection->count(array( 'nome' => array ('$regex' => $search)));
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

    <?php include 'topnav.php';?>

    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 gedf-main">              
                <div class="list-group">
                    <?php

                    if(empty($count)){
                        echo '<div class="alert alert-danger">
                                <div class="container">
                                <div class="alert-icon">
                                    <i class="material-icons">error_outline</i>
                                </div>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                </button>
                                <b>Alerta: </b> Nenhum perfil encontrado!
                                </div>
                            </div>';
                    }else{
                        foreach($rows as $row) {
                            ?>
                        <a class="list-group-item list-group-item-action list-group-item-dark acessarBtn" href="perfil.php?id=<?php echo $row->_id; ?>">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-2">
                                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                    </div>
                                    <div class="ml-2">
                                        <div class="h5 m-0">@<?php echo $row->usuario; ?></div>
                                        <div class="h7 text-muted"><?php echo $row->nome; ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                        }
                    } 
                            ?>
                </div>
            </div>
            <div class="col-md-3">
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