<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sketchbook</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>
<body>
    <?php 
    include 'topnav.php';
    ?>
    <div class="container mt-5 pt-5">
        <div class="row">
            <h2>Lista de Usuários</h2>
            <?php 
            try{
                include 'php/db.inc.php';
                $query = new MongoDB\Driver\Query([]);

                $rows = $manager->executeQuery($dbname, $query);

                echo "<table class='table'>
                    <thead>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Usuário</th>
                        <th>Ação</th>
                    </thead>";
                
                foreach($rows as $row){
                    echo "<tr>".
                        "<td>".$row->nome."</td>".
                        "<td>".$row->email."</td>".
                        "<td>".$row->usuario."</td>".
                        "<td><a class='btn btn-info' href='edituser.php?id=".$row->_id.
                        "&nome=".$row->nome.
                        "&email=".$row->email.
                        "&usuario=".$row->usuario.
                        "&senha=".$row->senha.
                        "'>Editar</a> ".
                        "<a class='btn btn-danger' href='php/delete.php?id=".$row->_id."'>Deletar</a></td>".
                    "</tr>";
                }
                    
                echo"</table>";
            }   catch(MongoDB\Driver\Exception\Exception $e){
                die("Error Encountered: ".$e);
            }
            ?>
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
</body>
</html>
