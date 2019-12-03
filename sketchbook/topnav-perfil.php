<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
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
        <form class="form-inline ml-auto">
            <div class="form-group has-white">
            <input type="text" class="form-control" placeholder="Buscar">
            </div>
            <button type="submit" class="btn btn-white btn-raised btn-fab btn-round">
            <i class="material-icons">search</i>
            </button>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                <div class="profile-photo-small">
                    <img src="./assets/img/faces/dudda.jpg" alt="Image" class="rounded-circle img-fluid">
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <h6 class="dropdown-header"><?php echo $_SESSION['nome']; ?></h6>
                <a href="perfil.php" class="dropdown-item">Perfil</a>
                <?php echo "<a href='edituser.php?id=".$_SESSION['id'].
                        "&nome=".$_SESSION['nome'].
                        "&email=".$_SESSION['email'].
                        "&usuario=".$_SESSION['usuario'].
                        "&senha=".$_SESSION['senha'].
                        "' class='dropdown-item'>Editar Perfil</a>" ?>
                <a href="php/logout.php" class="dropdown-item">Sair</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
