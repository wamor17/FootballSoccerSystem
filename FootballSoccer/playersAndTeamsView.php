<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="resource/css/teamsStyle.css">
        <title> Administraci&oacute;n del torneo </title>
    </head>
    <body>

    <?php
        include "Model/connectionModel.php";
        include "Templates/adminMenuBar.php";

        $getTeams = "SELECT *FROM Equipo ORDER BY ID_Equipo ASC;";
        $data = $connection->query($getTeams);
    ?>

    <div class="row">
        <div class="col m1 l1"></div>
        <div class="col s12 m10 l10">
            <h5> Lista de equipos y jugadores </h5>
            <a class="btn-small modal-trigger blue darken-2 waves-effect" href='#modalInsertTeam'> Nuevo equipo <i class='material-icons left'>add</i> </a>
            <a class="btn-small blue lighten-2 waves-effect"> Generar jornadas <i class='material-icons left'>loop</i> </a>
        </div>
        <div class="col m1 l1"></div>
    </div>

    <div class="row">
        <div class="col m1 l1"></div>
        <div class="col s12 m2 l2">

<!--
        <i href='#modalDeleteTeam' onclick='loadDataTeamForDelete(".$num.")' class='material-icons right modal-trigger'>delete</i>
        <i href='#modalModifyTeam' onclick='loadDataTeamForModify(".$num.")' class='material-icons right modal-trigger'>edit</i>
-->

            <?php
                $num = 0;
                echo "<div class='collection'>";
                while( $Equipos = $data->fetch_assoc() ){
                    echo "
                        <a href='#!' class='collection-item black-text' id='item".$num."'>
                            <i class='material-icons right'>chevron_right</i>
                            <strong id='nameTeam".$num."'>".$Equipos["Nombre"]." </strong>
                            <p class='IDTeam no-display' id='IDTeam".$num."'>".$Equipos["ID_Equipo"]."</p>
                            <p class='no-display TeamColor".$num."'> ".$Equipos["Color_Uniforme"]." </p>
                        </a>
                    ";
                $num++;
                }
                echo "</div>";

//              JUGADORES SIN EQUIPOS
                $QueryNT = "SELECT ID_Equipo FROM Jugador WHERE Jugador.ID_Equipo IS NULL;";
                $QData = $connection->query($QueryNT);

                if( $No = $QData->fetch_assoc() ){
                    echo "<ul class='collapsible collection with-header'>
                            <li class='collection-header'> <h6> Jugadores sin equipo </h6> </li>";

                            $QueryTeams = "SELECT ID_Equipo, Nombre FROM Equipo;";
                            $QueryOutOfTeams = "SELECT *FROM Jugador INNER JOIN Alumno USING (ID_Alumno) WHERE Jugador.ID_Equipo IS NULL;";
                            $QueryData = $connection->query($QueryOutOfTeams);

                            $numNoPlayer = 0;
                            while( $PlayerNoTeams = $QueryData->fetch_assoc() ){
                                echo "<li>";
                                    echo "<div class='collapsible-header'> <i class='material-icons'>expand_more</i> <a id='idAddPlayer".$numNoPlayer."' style='display: none;'> ".$PlayerNoTeams["ID_Alumno"]." </a>" .$PlayerNoTeams["Nombre"]." ".$PlayerNoTeams["Apellidos"]. "</div>";
                                    echo "<div class='collapsible-body'>
                                            <p> Seleccione un equipo </p> ";

                                    $QueryDataTeams = $connection->query($QueryTeams);

                                    while( $DataTeams = $QueryDataTeams->fetch_assoc() ){
                                    echo"<p> 
                                            <label>
                                                <input name='teams".$numNoPlayer."' type='radio' value='". $DataTeams["ID_Equipo"] ."' />
                                                <span> ". $DataTeams["Nombre"] ." </span>
                                            </label>
                                        </p>";
                                    }

                                    echo "<div class='right-align'>
                                            <button class='btn-small waves-effect blue darken-2' type='submit' name='action' onclick='addPlayer2Team(".$numNoPlayer.")'>Agregar
                                                <i class='material-icons left'>add</i>
                                            </button>
                                            </div>";
                                    echo "</div>";
                                echo "</li>";
                                
                                $numNoPlayer++;
                            }
                    echo "</ul>";
                }
                $QData->close();
            ?>
        </div>

        <div class="col s12 m8 l8">
                
            <div class='row'>
                <div class='col s12 m12 l4'>
                    
                    <div class="card white">
                        <div class="card-content">
                            <h5 class="table-title-text"> <i class="material-icons left">format_list_numbered</i> Estad&iacute;stica </h5>
                            <table class="Statistics">
                                <thead class="tStatisticsHead">
                                    <tr>
                                        <td> PJ </td>
                                        <td> G </td>
                                        <td> E </td>
                                        <td> P </td>
                                        <td> GF </td>
                                        <td> GC </td>
                                        <td> Dif </td>
                                        <td> Pts </td>
                                    </tr>
                                </thead>

                                <tbody class="tStatisticBody"></tbody>
                            </table>

                            <br> <h5> <i class="material-icons left">accessibility</i> Uniforme </h5>
                            <a id='colorTeam'> </a>

                            <div class='imgColorTeam'>
                                <img src='resource/images/kit-left.png' class='imgColorL'>
                                <img src='resource/images/kit-body.png' class='imgColorB'>
                                <img src='resource/images/kit_right.png' class='imgColorR'>
                                <img src='resource/images/kit_shorts.png' class='imgColorS1'>
                                <img src='resource/images/kit_socks.png' class='imgColorS2'>
                            </div>
                        </div>
                    </div>

                </div>

                <div class='col s12 m12 l8'>
                    <ul class="collapsible">
                        <li class="active">
                            <div class="collapsible-header"> <h5 class="table-title-text"> <i class="material-icons left">expand_more</i>  Jugadores </h5> </div>
                            <div class="collapsible-body">
                                <table class="tablePlayers">
                                    <thead class="tPlayersHead">
                                        <tr>
                                            <td> Nombre </td>
                                            <td> Posici&oacute;n </td>
                                            <td> Goles </td>
                                            <td>  </td>
                                        </tr>
                                    </thead>
                                    <tbody class="tPlayersBody"></tbody>
                                </table>                                    
                            </div>
                        </li>
                    </ul>

                </div>

            </div>

        </div>
        <div class="col m1 l1"></div>
    </div>

<!-- MODAL PARA MODIFICAR EL JUGADOR PERTENECIENTE A UN EQUIPO -->
    <div id="modalModifyPlayer" class="modal modal-fixed-footer">
        <div class="modal-content">
            <p id="modalPlayerID"></p>
            <h5 id="modalNamePlayer"> Nombre del jugador </h5>
            
            <div class="input-field col m12 posicionJugador">
                <select id="modalPlayerPosition">
                    <option value="Portero"> Portero </option>
                    <option value="Defensa"> Defensa </option>
                    <option value="Mediocampista"> Mediocampista </option>
                    <option value="Delantero"> Delantero </option>
                </select>
                <label> Posici&oacute;n como jugador </label>
            </div>

            <div class="input-field golesAnotados">
                <input type="text" id="modalGolesAnotados" placeholder='Goles anotados por el jugador'>
                <label for="modalGolesAnotados">Goles anotados</label>
            </div>

        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-orange btn grey lighten-1" onclick="updatePlayer()"> Actualizar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

<!-- MODAL PARA ELIMINAR EL JUGADOR PERTENECIENTE A UN EQUIPO -->
    <div id="modalDeletePlayer" class="modal modal-fixed-footer">
        <div class="modal-content center-align">
            <i class='large material-icons'>info_outline</i>
            <input type="text" id="modalIDPlayer2Delete">
            <p> ¿Desea eliminar a <strong id="namePlayer2Delete"> </strong> del equipo <strong id="nameTeam2Delete"></strong>? </p>
        </div>

        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn grey lighten-1" onclick="DeletePlayer()"> Eliminar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

    <div id="modalInsertTeam" class="modal modal-fixed-footer">
        <div class="modal-content">

            <div class="row">
                <div class="col s12 m6 l6">
                    <h5> Nuevo equipo </h5>
                    <div class="input-field">
                        <input type="text" class="form-control" id="txtNameTeamModal">
                        <label for="txtNameTeamModal""> Nombre del equipo </label>
                    </div>

                    <label> Color del uniforme: </label>            
                    <div class="input-field">
                        <select id="SelectColorTeam">
                            <option value="white"> Blanco </option>
                            <option value="black"> Negro </option>
                            <option value="red"> Red </option>
                            <option value="orange"> Naranja </option>
                            <option value="pink"> Rosa </option>
                            <option value="green"> Verde </option>
                            <option value="blue"> Azul </option>
                            <option value="darkgray"> Gris </option>
                            <option value="darkblue"> Azul marino </option>
                            <option value="yellow"> Amarillo </option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <div class='imgColorTeam1'>
                        <img src='resource/images/kit-left.png' class='imgColorL ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit-body.png' class='imgColorB ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit_right.png' class='imgColorR ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit_shorts.png' class='imgColorS1 ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                        <img src='resource/images/kit_socks.png' class='imgColorS2 ckit' style='background-color:".$Equipos["Color_Uniforme"]."'>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a class="btn-small waves-effect blue darken-2" id="btnNewTeam" onclick="insertTeam()"> Agregar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

    <div id="modalModifyTeam" class="modal modal-fixed-footer">
        <div class="modal-content">

            <div class="row">
                <div class="col s12 m6 l6">
                    <h5 class="title-modify-team"> Modificando: </h5><br>
                    <div class="input-field">
                        <a class="IDTeamUpdate"></a>
                        <input type="text" class="form-control" id="newNameTeam" placeholder="Equipo">
                        <label for="newNameTeam""> Nombre del equipo </label>
                    </div>

                    <label> Color del uniforme: </label>            
                    <div class="input-field">
                        <select id="SelectColorTeamUpdate">
                            <option value="white"> Blanco </option>
                            <option value="black"> Negro </option>
                            <option value="red"> Red </option>
                            <option value="orange"> Naranja </option>
                            <option value="pink"> Rosa </option>
                            <option value="green"> Verde </option>
                            <option value="blue"> Azul </option>
                            <option value="darkgray"> Gris </option>
                            <option value="darkblue"> Azul marino </option>
                            <option value="yellow"> Amarillo </option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m6 l6 box-kit">
                    <div class='imgColorTeam1'>
                        <img src='resource/images/kit-left.png' class='imgColorL cmkit'>
                        <img src='resource/images/kit-body.png' class='imgColorB cmkit'>
                        <img src='resource/images/kit_right.png' class='imgColorR cmkit'>
                        <img src='resource/images/kit_shorts.png' class='imgColorS1 cmkit'>
                        <img src='resource/images/kit_socks.png' class='imgColorS2 cmkit'>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <a class="btn-small waves-effect yellow darken-3" id="btnNewTeam" onclick="updateTeam()"> Modificar </a>
            <a href="#!" class="modal-close waves-effect btn-flat"> Cancelar </a>
        </div>
    </div>

    <div id="modalDeleteTeam" class="modal modal-fixed-footer">
        <div class="modal-content center-align">
            <i class="material-icons large ">error_outline</i>

            <div class="form-group">
                <input id="IDTeamModalDelete" class="txtIDTeamDelete" type="text" class="form-control">
                <p> ¿Esta seguro que desea sacar al equipo <strong id="nameTeamToDelete"> </strong> del torneo de f&uacute;tbol del DEM Yuriria? </p>
            </div>
        </div>

        <div class="modal-footer">
            <a class="btn-small waves-effect red righten-2" onclick="deleteTeam()"> Borrar equipo </a>
            <a class="btn-flat waves-effect modal-close"> Cancelar </a>
        </div>
    </div>

    <?php include "Templates/metaInformation.php" ?>
    <script src="resource/js/teamsScript.js"></script>
    <script>
            $(document).ready(function(){
                $('.dropdown-trigger').dropdown();
                $('.modal').modal();
                $('.sidenav').sidenav();
                $('.tabs').tabs();
                $('.collapsible').collapsible();
                $('select').formSelect();
            });
    </script>

    </body>
</html>
