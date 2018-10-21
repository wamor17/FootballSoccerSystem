<!-- 
    Document   : index
    Created on : 20-ene-2018, 14:26:55
    Author     : walter
-->

<?php include "Model/connectionModel.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="Resource/css/IndexStyle.css">
        <?php include "Templates/AppStyles.php"; ?>
        <title> Torneo del futbol </title>
    </head>
    <body onload="loadData()">

        <div class="navbar-fixed">
            <nav class="blue-grey darken-4">
            <div class="row">
                <div class="col m1"></div>
                <div class="col s12 m10">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo"> <i class="large licon material-icons left">school</i> Campeonato </a>
                        <a href="#" data-target="mobile-demo" class="sidenav-trigger"> <i class="material-icons"> menu </i></a>
                        <ul id="nav-mobile" class="right">
                            <li><a class="waves-effect waves-light modal-trigger hide-on-med-and-down" href="#modalLogIn">
                                Iniciar sesi&oacute;n <i class="material-icons left">lock_open</i></a>
                            </li>
                            <li><a class="waves-effect waves-light modal-trigger  hide-on-med-and-down">
                                Acerca de <i class="material-icons left">info</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col m1"></div>
            </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            <li><a class="waves-effect waves-light modal-trigger" href="#modalLogIn"> Iniciar sesi&oacute;n <i class="material-icons left">lock_open</i> </a></li>
            <li><a class="waves-effect waves-light modal-trigger"> Acerca de <i class="material-icons left">info</i></a></li>
        </ul>

        	<?php
                $getChamp = "SELECT *FROM Semestre;";
                $dataChampionship = $connection->query($getChamp);

                if( $dataChampionship->num_rows > 0 ){
                    $Semester = $dataChampionship->fetch_assoc();
                }
            ?>

            <br>
<!--
            <div class="row">
                <div class="col s12 m12 l10 offset-l1">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text center-align">
                            <p class="principalBanner"> Torneo de f&uacute;tbol del semestre <?php //echo $Semester["Semestre"] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
-->
            <div class="row">
            <div class="col l1 "></div>
            <div class="col s12 m12 l5 col-game-result">
                <div class='row marginJornadas'>
                
                    <div class='col m7 left-align'>
                        <p id='NumJornada' class='sizeTextJornadas'></p>
                    </div>

                    <div class='col m5'>
                        <div class='dropdown right-align'>
                            <a class='dropdown-trigger btn blue-grey lighten-1 waves-effect waves-light' href='#!' data-target='ddJornadas'>
                                Cambiar jornada <i class='small material-icons right'>arrow_drop_down</i>
                            </a>

                            <ul id='ddJornadas' class='dropdown-content'>
                                <!-- <li><a href='#!'>Jornada 1</a></li> -->
                            </ul>
                        </div>
                    </div>
                
                </div>
                <br>
                <?php
/*
                    $getPartidos = "SELECT *FROM Partido LIMIT 4;";
                    $Partidos = $connection->query($getPartidos);

                    if( $Partidos->num_rows > 0 ){
                        $num = 0;
                        while( $Resultados = $Partidos->fetch_assoc() ){
                            echo" <div class='card hoverable'>
                                    <div class='card-content'>
                                        <div class='row rowCardResultGame'>
                                            <a id='idGame_".$num."'>  </a>
                                            <a id='jornada_".$num."'>  </a>
                                            <div class='col s4 m4 center-align sizeTeams' id='E1_".$num."_left'> Equipo 1 </div>
                                            <div class='col s4 m4 center-align border-lr sizeGoals' id='goles_".$num."'> - - </div>
                                            <div class='col s4 m4 center-align sizeTeams' id='E2_".$num."_right'> Equipo 2 </div>
                                        </div>
                                    </div>                                        
                                    <div class='card-action grey lighten-5'>
                                        <div class='center-align marginHour' id='dateGame".$num."'> Fecha </div>
                                    </div>
                                </div>";
                            $num++;
                        }
                    }*/
                ?>
            </div>

            <div class="col s12 m12 l5">
                <div class="card hoverable">
                    <div class="card-content noPaddingCard">
                        <div class="card-title center-align tgTitleSize"> Tabla general </div>
                        <div class="divider"></div>
                        <table class="table striped">
                            <tr>
                                <th class="center-align hs"> EQUIPO </th>
                                <th class="center-align hs"> PJ </th>
                                <th class="center-align hs"> G </th>
                                <th class="center-align hs"> E </th>
                                <th class="center-align hs"> P </th>
                                <th class="center-align hs"> GF </th>
                                <th class="center-align hs"> GE </th>
                                <th class="center-align hs"> DIF </th>
                                <th class="center-align hs"> PTS </th>
                            </tr>

                            <?php
                                $query = "SELECT *FROM Equipo ORDER BY Puntos DESC";
                                $data = $connection->query($query);

                                if( $data->num_rows > 0 ){
                                    $npos = 1;
                                    while( $equipo = $data->fetch_assoc() ){

                                        if( $equipo["Diff"] > 0 ){
                                            $colorDiff = 'green';
                                            $Diff = "+".$equipo["Diff"];
                                        }else if( $equipo["Diff"] < 0 ){
                                            $colorDiff = 'red';
                                            $Diff = $equipo["Diff"];
                                        }else{
                                            $colorDiff = 'black';
                                            $Diff = $equipo["Diff"];
                                        }

                                        echo "<tr>";
                                            echo "<td class='eS'>". $npos.". ". $equipo["Nombre"]."</td>"; 
                                            echo "<td class='center-align eS'>". $equipo["PJ"] ."</td>";
                                            echo "<td class='center-align eS'>". $equipo["PG"] ."</td>";
                                            echo "<td class='center-align eS'>". $equipo["PE"] ."</td>";
                                            echo "<td class='center-align eS'>". $equipo["PP"] ."</td>";
                                            echo "<td class='center-align eS'>". $equipo["GA"] ."</td>";
                                            echo "<td class='center-align eS'>". $equipo["GR"] ."</td>";
                                            echo "<td style='color: $colorDiff' class='center-align eS'>". $Diff ."</td>";
                                            echo "<td class='center-align eS'><strong>". $equipo["Puntos"] ."</strong></td>";
                                        echo "</tr>";
                                        $npos++;
                                    }
                                }
                            ?>
                        </table>
                    </div>

                    <div class="card-action glMargin grey lighten-5">
                        <div class="row">
                            <div class="col s12 m12">
                                <p class="glSize textGlosary"> <i class="gliconSize small material-icons left">book</i> GLOSARIO </p>
                            </div>

                            <div class="col s4 m4">
                                <p class="glSize"> PJ: Partidos jugados </p>
                                <p class="glSize"> P: Partidos perdidos </p>
                            </div>

                            <div class="col s4 m4">
                                <p class="glSize">  G: Partidos ganados </p>
                                <p class="glSize">  GF: Goles a favor</p>
                            </div>

                            <div class="col s4 m4">
                                <p class="glSize"> E: Partidos empatados </p>
                                <p class="glSize"> GE: Goles en contra </p>
                            </div>
                        </div>                  
                    </div>

                </div>
<!--
                <div class="card hoverable">
                    <div class="card-content noPaddingCard">
                        <div class="card-title center-align tgTitleSize"> Tabla de goleo </div>
                        <div class="divider"></div>
                        
                        <table class="table striped">
                            <tr>
                                <th class="center-align hs"> Nombre </th>
                                <th class="center-align hs"> Equipo </th>
                                <th class="center-align hs"> Goles </th>
                            </tr>

                            <?php/*
                                $query = "SELECT Alumno.Nombre AS NameAlumno, Apellidos, Equipo.Nombre AS NameTeam, Jugador.Goles_Marcados FROM Alumno INNER JOIN Jugador ON Jugador.ID_Alumno = Alumno.ID_Alumno INNER JOIN Equipo ON Jugador.ID_Equipo = Equipo.ID_Equipo ORDER BY Goles_Marcados DESC LIMIT 5;";
                                $data = $connection->query($query);

                                if( $data->num_rows > 0 ){
                                    $npos = 1;
                                    while( $goleador = $data->fetch_assoc() ){
                                        echo "<tr>";
                                            echo "<td class='left-align eS'>". $goleador["NameAlumno"]." ". $goleador["Apellidos"]."</td>";
                                            echo "<td class='left-align eS'>". $goleador["NameTeam"] ."</td>";
                                            echo "<td class='center-align eS'>". $goleador["Goles_Marcados"] ."</td>";
                                        echo "</tr>";
                                        $npos++;
                                    }
                                }
                                $connection->close();
                                */
                            ?>
                        </table>
                    </div>
                </div>
-->
            </div>
            <div class="col l1"></div>
        </div>
        <br>

     <!-- MODAL QUE MUESTRA EL FORMULARIO DE LOGIN PARA LOS DIFERENTES USUARIOS -->
        <div id="modalLogIn" class="modal">
            <div class="modal-content">
                <h4> Inicio de sesi&oacute;n </h4><br>
                <div class="input-field">
                    <input id="txtUser" type="text" class="validate">
                    <label for="txtUser"> Nombre de usuario </label>
                </div>

                <div class="input-field">
                    <input id="txtPassword" type="password" class="validate">
                    <label for="txtPassword"> Contraseña </label>
                </div>

                <div class="red-text" id="alertDanger" style="display: none;">
                    <p> <strong> Usuario </strong> o <strong> contraseña </strong> incorrectos </p>
                </div>

                <div class="green-text" id="alertSuccess" style="display: none;">
                    <p> <strong> Bienvenido </strong> </p>
                </div>
            </div>

            <div class="modal-footer">
                <a class="waves-effect waves-light btn blue-grey lighten-1" onclick="verifyDataUser()"> <i class="material-icons left">check</i> Ingresar </a>
                <a class="modal-close waves-effect waves-light btn blue-grey lighten-1"> <i class="material-icons left">close</i> Salir </a>
            </div>
        </div>

        <footer class="page-footer blue-grey lighten-1">
            <div class="container">
                2018 GPL
            <a class="grey-text text-lighten-4 right" href="#!"> github.com/wamor17 </a>
            </div>
        </footer>

        <?php include "Templates/AppScripts.php"; ?>
        <script src="Resource/js/IndexScript.js"></script>
    </body>
</html>
