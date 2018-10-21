
    <div class="navbar-fixed">
        <nav class="grey darken-4">
        <div class="row">
            <div class="col m1"></div>
            <div class="col s12 m10">
                <div class="nav-wrapper">
                    <a href="adminView.php" class="brand-logo"> <i class="large licon material-icons left">settings</i> Liga DEM Yuriria </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"> <i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a class="dropdown-trigger waves-effect waves-light" href="#!" data-target="dropdown1"> Men&uacute; de administraci&oacute;n <i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="waves-effect waves-light" href="index.php"> <i class="small material-icons left">lock_outline</i> Cerrar sesi&oacute;n </a></li>
                    </ul>
                </div>
            </div>
            <div class="col m1"></div>
        </div>
        </nav>
    </div>

    <!-- Estructura del dropdown para el menu principal para PC's -->
    <ul id="dropdown1" class="dropdown-content">
        <li class='ddMenu waves-effect'><a href="tournamentsView.php"> <i class="material-icons">insert_invitation</i> Torneos </a></li>
        <li class='ddMenu waves-effect'><a href="playersAndTeamsView.php"> <i class="material-icons">group_work</i> Equipos </a></li>
        <li class='ddMenu waves-effect'><a href="studentsManagmentView.php"> <i class="material-icons">people_outline</i> Jugadores </a></li>
        <li class='ddMenu waves-effect'><a href="adminView.php"> <i class="material-icons">list</i> Jornadas y resultados </a></li>
    </ul>

    <!-- Estructura del dropdown para el menu principal para smartphones -->
    <ul id="mobile-demo" class="sidenav">
        <li><a class="waves-effect" href="tournamentsView.php"> <i class="material-icons">insert_invitation</i> Torneos </a></li>
        <li><a class="waves-effect" href="playersAndTeamsView.php"> <i class="material-icons">group_work</i> Equipos </a></li>
        <li><a class="waves-effect" href="studentsManagmentView.php"> <i class="material-icons">people_outline</i> Jugadores </a></li>
        <li><a class="waves-effect" href="adminView.php"> <i class="material-icons">list</i> Jornadas y resultados </a></li>
        <li><a class="waves-effect" class="waves-effect waves-light modal-trigger  hide-on-med-and-down"> Acerca de <i class="material-icons left">info</i></a> </li>
        <li><a class="waves-effect" href="index.php"> <i class="small material-icons left">lock_outline</i> Cerrar sesi&oacute;n </a></li>
        <li><a class="waves-effect" class="waves-effect waves-light modal-trigger"> Acerca de <i class="material-icons left">info_outline</i></a></li>
    </ul>
