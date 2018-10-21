<!-- 
    Document   : adminView
    Created on : 24-ene-2018, 13:06:59
    Author     : walter
-->

<?php
    include "Model/connectionModel.php";
    include "Templates/adminMenuBar.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="resource/css/indexStyle.css">
        <title> Administraci&oacute;n del torneo </title>
        <?php include "Templates/metaInformation.php" ?>
    </head>
    <body onload="loadData()">

<!--
        <?php
/*
            $getChamp = "SELECT *FROM Semestre;";
            $dataChampionship = $connection->query($getChamp);

            if( $dataChampionship->num_rows > 0 ){
                $Semester = $dataChampionship->fetch_assoc();
            }
*/
        ?>

        <br>
        <div class="row">
            <div class="col s12 m12 l10 offset-l1">
                <div class="card grey darken-1">
                    <div class="card-content white-text center-align">
                        <p class="principalBanner"> Torneo de f&uacute;tbol del semestre <?php // echo $Semester["Semestre"] ?> </p>
                    </div>
                </div>
            </div>
        </div>
-->

        <br>
        <div class="row">
            <div class="col l1 "></div>
            <div class="col s12 m12 l5">
                    <?php
                        $getJornadas = "SELECT DISTINCT Num_Jornada FROM Jornada ORDER BY Num_Jornada ASC;";
                        $dataJornadas = $connection->query($getJornadas);

                        echo "<div class='row marginJornadas'>
                                <div class='col m7 left-align'>
                                    <p id='jornada' class='sizeTextJornadas'></p>
                                </div>
                                <div class='col m5'>
                                    <div class='dropdown right-align'>
                                        <a class='dropdown-trigger btn blue darken-2 waves-effect waves-light' href='#' data-target='ddJornadas'>
                                            Cambiar jornada <i class='small material-icons right'>arrow_drop_down</i>
                                        </a>

                                        <ul id='ddJornadas' class='dropdown-content'>";
                                            if( $dataJornadas->num_rows > 0 ){
                                                while( $Jornadas = $dataJornadas->fetch_assoc() ){
                                                    echo "<li class='black-text waves-effect' id='j".$Jornadas["Num_Jornada"]."' onclick='selectJornada(".$Jornadas["Num_Jornada"].")'><a href='#'> Jornada ".$Jornadas["Num_Jornada"]." </a></li>";
                                                }
                                            }
                        echo           "</ul>
                                    </div>
                                </div>
                              </div>
                            <br>
                            ";

                        $getPartidos = "SELECT *FROM Partido LIMIT 4;";
                        $Partidos = $connection->query($getPartidos);

                        if( $Partidos->num_rows > 0 ){
                            $num = 0;
                            while( $Resultados = $Partidos->fetch_assoc() ){
                                echo "  <div class='card hoverable cardSize'>
                                            <div class='card-image'>
                                                <a class='btn-floating btnFloatingEdit btn-small white waves-effect waves-orange halfway-fab modal-trigger' href='#modalModifyGame' onclick='loadDataToModify($num)'><i class='material-icons iconEditGames'>edit</i></a>
                                            </div>

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
                        }
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
                                            echo "<td class='center-align eS'><strong>". $equipo["Puntos"] ."<strong></td>";
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
/*
                            <?php /*
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
*/
                        </table>
                    </div>
                </div>

            </div>
            <div class="col l1"></div>
        </div>
        <br><br>
-->
    <div id="modalModifyGame" class="modal modal-fixed-footer">
        <div class="modal-content modalContModifyGame">

            <div class="row rowGameModify">
                <p id='idGameModal'></p>
                <p id='idJornadaModal'></p>

                <div class="col s12 m4">
<!--                    <input type="text" id="e1" class="form-control team1Modal center-align" disabled>-->
                    <div class="team1Modal center-align" id="e1"></div>
                </div>

                <div class="col s12 m4">
                    <div class="col s5 m5">
                        <input type="text" id="e1Goals" class="form-control e1GoalsModal">
                    </div>
                    <div class="col s2 m2 center-align">___</div>
                    <div class="col s5 m5">
                        <input type="text" id="e2Goals" class="form-control e1GoalsModal">
                    </div>
                </div>

                <div class="col s12 m4">
<!--                    <input type="text" id="e2" class="form-control team2Modal center-align" disabled> -->
                    <div class="team2Modal center-align" id="e2"></div>
                </div>
            </div>

            <div class="row rowDateModify">
                <div class="col m3"></div>

                <div class="col s12 m3 input-field">
                    <input type="text" id="setDateModal" class="center-align" placeholder="Fecha">
                    <label for="setDateModal"> Fecha del partido </label>
                </div>

                <div class="col s12 m3 input-field">
                    <input type="text" id="setHourModal" class="center-align" placeholder="Hora">
                    <label for="setHourModal"> Hora </label>
                </div>

                <div class="col m3"></div>
            </div>
        </div>

        <div class="modal-footer">
            <a class="waves-effect waves-light btn grey lighten-1 center" onclick="ModifyResultGames()"> <i class="material-icons left">check</i> Aplicar cambios </a>
            <a class="modal-close waves-effect waves-light btn grey lighten-1"> <i class="material-icons left">close</i> Cancelar </a>
        </div>
    </div>

    <script src="resource/js/indexScript.js"></script>
    <script>
            $(document).ready(function(){
                $('.dropdown-trigger').dropdown();
                $('.modal').modal();
                $('.sidenav').sidenav();
                $('.datepicker').datepicker();
                $('.timepicker').timepicker();
            });
    </script>

    </body>
</html>
