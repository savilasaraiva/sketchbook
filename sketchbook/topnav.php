<nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
    <div class="container">
        <div class="navbar-translate">
        <a class="navbar-brand" href="index.php">SKETCHBOOK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse">
        <form class="form-inline ml-auto" method="GET" action="searchuser.php">
            <div class="form-group has-white">
                <input type="text" id="searchuser" name="searchuser" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
                <i class="material-icons">search</i>
            </button>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="dropdown nav-item">
            <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                <div class="profile-photo-small">
                <img src="./assets/img/perfis/<?php echo $_SESSION['usuario'] ?>.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <h6 class="dropdown-header"><?php echo $_SESSION['nome']; ?></h6>
                <a href="perfil.php" class="dropdown-item">Perfil</a>
                <?php echo "<a href='edituser.php?id=".$_SESSION['id'].
                        "' class='dropdown-item'>Editar Perfil</a>" ?>
                <a href="php/logout.php" class="dropdown-item">Sair</a>
            </div>
            </li>
        </ul>        
        </div>
    </div>
</nav>