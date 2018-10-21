<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Red Social</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRedSocial" aria-controls="navbarRedSocial" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarRedSocial">
            <form class="form-inline my-2 my-lg-0" action="buscar.php" method="get" id="buscar">
                    <input class="form-control mr-sm-2" type="text" name="busqueda" placeholder="Buscar amigos">
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown" id="info-solicitud">
                        <a href="#" class="nav-link dropdown-toggle" id="solicitudDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="icon-users"></span>
                            <spna class="no-leido">3</spna>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="solicitudDropdown">
                            <a class="dropdown-item" href="perfil.php">Usuario 2</a>
                            <a class="dropdown-item icon-checkmark" href="solicitud.php"></a>
                            <a class="dropdown-item icon-cross" href="solicitud.php"></a>
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Usuario
                        </a>
                        <div class="dropdown-menu" aria-labelledby="usersDropdown">
                            <a class="dropdown-item" href="perfil.php">Perfil</a>
                            <a class="dropdown-item" href="cerrar.php">Cerrar</a>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
</header>