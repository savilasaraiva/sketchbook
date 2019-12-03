<!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php">SKETCHBOOK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USUÁRIOS</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="form.php">Novo Usuário</a>
            <a class="dropdown-item" href="userlist.php">Listar Usuários</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="php/logout.php">Sair </a>
        </li>
    </ul>
    </div>
</nav> -->

<nav class="navbar navbar-inverse navbar-expand-lg bg-dark" role="navigation-demo">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-translate">
        <a class="navbar-brand" href="index.php">SKETCHBOOK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
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
            <!-- <li class="nav-item">
            <a href="#pablo" class="nav-link">
                Discover
            </a>
            </li>
            <li class="nav-item">
            <a href="#pablo" class="nav-link">
                Wishlist
            </a>
            </li> -->
            <li class="dropdown nav-item">
            <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                <div class="profile-photo-small">
                <img src="./assets/img/faces/dudda.jpg" alt="Circle Image" class="rounded-circle img-fluid">
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
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-->
</nav>
